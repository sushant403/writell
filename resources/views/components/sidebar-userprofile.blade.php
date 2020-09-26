<div class="modal fade fixed-right" id=modal-profile tabindex=-1 role=dialog aria-hidden=true>
    <div class="modal-dialog modal-vertical" role=document>
        <div class=modal-content>
            <div class=modal-body>
                <div>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=px-4>
                    <div class="d-flex my-4">
                        <div class="avatar-parent-child mx-auto">
                            <img alt="Image placeholder" src=/img/theme/light/person-auth.jpg
                                class="avatar avatar-xl rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <h6 class="h5 mb-0">{{ Auth::user()->name }}</h6>
                        <span class="d-block text-muted">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="col-4 text-center">
                            <a href=# class="h5 font-weight-bolder text-primary mb-0">125</a>
                            <span class="d-block text-sm">Posts</span>
                        </div>
                        <div class="col-4 text-center">
                            <a href=# class="h5 font-weight-bolder text-primary mb-0">350</a>
                            <span class="d-block text-sm">Following</span>
                        </div>
                        <div class="col-4 text-center">
                            <a href=# class="h5 font-weight-bolder text-primary mb-0">1.5K</a>
                            <span class="d-block text-sm">Followers</span>
                        </div>
                    </div>
                    <div class=mb-5>
                        <div class="mt-4 pt-4 border-top">
                            <div class="row align-items-center mb-3">
                                <div class=col-auto>
                                    <div class="icon icon-shape bg-soft-warning text-warning">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <span class="d-block h6 text-sm mb-0">Images</span>
                                    <p class="mb-0 text-sm">50 files</p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class=col-auto>
                                    <div class="icon icon-shape bg-soft-success text-success">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <span class="d-block h6 text-sm mb-0">Blogs</span>
                                    <p class="mb-0 text-sm">75 Blogs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-3 mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"
                    class="btn btn-block btn-sm btn-neutral btn-icon rounded-pill">
                    <span class=btn-inner--icon>
                        <i data-feather=log-out></i>
                    </span>
                    <span class=btn-inner--text>Sign out</span>
                </a>
                </form>
            </div>
        </div>
    </div>
</div>