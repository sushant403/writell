/* eslint-disable linebreak-style */
/* eslint-disable max-len */
/* eslint-disable indent */
/* eslint-disable linebreak-style */
/* eslint-disable require-jsdoc */

let quill = null;

function selectLocalImage() {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.click();

    // Listen upload local image and save to server
    input.onchange = () => {
        const file = input.files[0];

        // file type is only image.
        if (/^image\//.test(file.type)) {
            imageHandler(file);
        } else {
            console.warn('You could only upload images.');
        }
    };
}

function imageHandler(image) {
    const formData = new FormData();
    formData.append('image', image);
    formData.append('_token', $('meta[name=csrf-token]').attr('content'));

    const url = $('#content').data('imageUrl');

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.url) {
                insertToEditor(response.url, quill);
            }
        },
    });
}

// eslint-disable-next-line require-jsdoc
function insertToEditor(url, editor) {
    const range = editor.getSelection();
    editor.insertEmbed(range.index, 'image', url);
}
$(document).ready(function() {
    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{header: 1}, {header: 2}], // custom button values
        [{list: 'ordered'}, {list: 'bullet'}],
        [{script: 'sub'}, {script: 'super'}], // superscript/subscript
        [{indent: '-1'}, {indent: '+1'}], // outdent/indent
        [{direction: 'rtl'}], // text direction
        [{size: ['small', false, 'large', 'huge']}], // custom dropdown
        [{header: [1, 2, 3, false]}],
        [{color: []}, {background: []}], // dropdown with defaults from theme
        [{font: []}],
        [{align: []}],
        ['link', 'image', 'video'], // add's image support
        ['clean'],
    ];

    quill = new Quill('#content', {
        modules: {
            syntax: true,
            toolbar: toolbarOptions,
        },
        theme: 'snow',
        placeholder: 'Compose a Epic!',
    });

    quill.getModule('toolbar').addHandler('image', () => {
        selectLocalImage();
    });

    quill.on('text-change', function(delta, oldDelta, source) {
        $('#content-textarea').text($('.ql-editor').html());
    });
});
