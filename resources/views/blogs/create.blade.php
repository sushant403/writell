@extends('layouts.master')

@section('title', 'Create a Blog - Writell')


@section('content')
<section class="pt-4">
    <div class="row">
        <div class="col-md-9 mx-auto pt-4">
            <div class="card">
                <div class="card-header">Write an Awesome Blog!</div>
                <div class="card-body">
                    <a href="{{ route('index') }}" title="Back"><button class="btn btn-neutral btn-sm"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ url('/posts') }}" accept-charset="UTF-8" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                        @include ('blogs.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection