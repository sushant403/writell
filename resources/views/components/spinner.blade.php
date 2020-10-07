<style>
    @keyframes hidePreloader {
        0% {
            width: 100%;
            height: 100%
        }

        100% {
            width: 0;
            height: 0
        }
    }

    body>div.preloader {
        position: fixed;
        background: #1B2326;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0;
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center
    }

    body:not(.loaded)>div.preloader {
        opacity: 1
    }

    body:not(.loaded) {
        overflow: hidden
    }

    body.loaded>div.preloader {
        animation: hidePreloader .5s linear .5s forwards
    }
</style>
<script>
    window.addEventListener("load", function() {
        setTimeout(function() {
            document.querySelector("body").classList.add("loaded")
        }, 300)
    })
</script>

<div class=preloader>
    <div class="spinner-border text-primary" role=status><span class=sr-only>Loading...</span></div>
</div>