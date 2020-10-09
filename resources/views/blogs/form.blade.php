<link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.snow.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
@section('extra-css')
<style>
    .ql-editor {
        height: 100vh !important;
    }
</style>
@endsection

@section('extra-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{asset('js/quill-custom.js')}}"></script>
@endsection

<div class="tab-content my-3" id="myTabContent">

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label for="title" class="control-label">{{ 'Title' }}</label>
        <input class="form-control" name="title" type="text" id="title"
            value="{{ isset($post->title) ? $post->title : ''}}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group py-4 {{ $errors->has('content') ? 'has-error' : ''}}">
        <label for="content" class="control-label">{{ 'Content' }}</label>
        <div id="content" data-image-url="">
            {!! isset($post->content) ? $post->content : '' !!}
        </div>
        <textarea class="form-control" rows="10" name="content" type="textarea" style="display: none;color:white"
            id="content-textarea">{{ isset($post->content) ? $post->content : ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="custom-control custom-switch py-4">
        <input type="checkbox" class="custom-control-input" id="published" value="true" @if(!empty($post) &&
            $post->published) checked @endif name="published">
        <label class="custom-control-label" for="published">Public</label>
    </div>

    <div class="custom-file py-3 mb-4">
        <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail-input">
        <label class="custom-file-label" for="thumbnail-input">Choose thumbnail</label>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>