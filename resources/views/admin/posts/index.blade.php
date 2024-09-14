@extends('layouts.admin-layout')
@section('contents')
<div class="pagetitle">
    <h1>Posts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Posts</li>
{{--            <li class="breadcrumb-item active">General</li>--}}
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Categories</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $ap)
                                <tr>
                                    <th scope="row">{{$ap->id}}</th>
                                    <td>{{$ap->title}}</td>
                                    <td>{{$ap->body}}</td>
                                    <td>
                                        @if($ap->categories->isNotEmpty())
                                            @foreach($ap->categories as $category)
                                                <a href="/admin/categories/{{ $category->id }}">{{ $category->name }}</a>
                                                @if (!$loop->last)
                                                ,
                                                @endif
                                            @endforeach
                                        @else

                                        @endif
                                    </td>
                                    <td>{{$ap->updated_at}}</td>
                                    <td>
                                        <div class="">
                                            <button class="dropdown-toggle" type="" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a href="/admin/posts/{{ $ap->id }}/edit" class="dropdown-item" >Edit post</a></li>
                                                <li>
                                                    <form method="POST" action="/admin/posts/{{ $ap->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" href="/admin/posts/{{ $ap->id }}" class="dropdown-item" >Delete post</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    @if(count($posts) > 1)
                        {!! $posts->render() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
