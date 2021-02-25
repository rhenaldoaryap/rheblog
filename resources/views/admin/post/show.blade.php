@extends('layouts.admin')

@section('title', 'View Post')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">View Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Post List</a></li>
                    <li class="breadcrumb-item active">View Post</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">View Post - <span class="font-weight-bold text-danger">{{ $post->title }}</span></h3>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Post List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="max-width: 200px;">Image</th>
                                    <td>
                                        <div style="max-width: 300px; max-height: 300px; overflow: hidden;">
                                            <img src="{{ asset($post->image) }}" alt="image" class="img-fluid">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 200px;">Title</th>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px;">Category Name</th>
                                    <td>{{ $post->category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Tag Name</th>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Author</th>
                                    <td>{{ $post->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Total Views</th>
                                    <td>{{ views($post)->count() }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px;">Description</th>
                                    <td>{!! $post->description !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection