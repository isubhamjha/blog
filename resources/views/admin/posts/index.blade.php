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
                    <h5 class="card-title">Table with stripped rows</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $ap)
                                <tr>
                                    <th scope="row">{{$ap->id}}</th>
                                    <td>{{$ap->title}}</td>
                                    <td>{{$ap->body}}</td>
                                    <td>{{$ap->created_at}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    {!! $posts->render() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
