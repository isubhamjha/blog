@extends('layouts.admin-layout')
@section('contents')
    <div class="pagetitle">
        <h1>Edit Post</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Edit Post</li>
                {{--            <li class="breadcrumb-item active">General</li>--}}
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <div class="row">
                            <div class="col-lg-6 offset-3">
                                <form method="POST" action="/admin/posts/{{ $post->id }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="body" class="col-sm-2 col-form-label">Body</label>
                                        <div class="col-sm-10">
                                            <textarea  class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                             <img width="100px" alt="{{$post->slug}}" src="{{ $post->cover_image }}" />

                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="/admin/posts/{{ $post->id }}" type="reset" class="btn btn-secondary">Back</a>
                                    </div>
                                </form><!-- End Horizontal Form -->
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
