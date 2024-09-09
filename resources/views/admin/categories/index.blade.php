@extends('layouts.admin-layout')
@section('contents')
    <div class="pagetitle">
        <h1>Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total posts</th>
                                <th scope="col">Timestamp</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_categories as $ac)
                                <tr>
                                    <th scope="row">{{$ac->id}}</th>
                                    <td>{{$ac->name}}</td>
                                    <td>
                                        <a href="@if(count($ac->posts)>1) /admin/posts/category/{{$ac->id}} @else # @endif">
                                        {{count($ac->posts)}} @if(count($ac->posts)>1) Posts @else Post @endif
                                        </a>
                                    </td>
                                    <td>{{$ac->created_at}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
{{--                        {!! $all_cat  egories->render() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
