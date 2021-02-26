@extends('layouts.admin')

@section('title', 'Post Controller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Post List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Post</li>
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
                        <h3 class="card-title">Post List</h3>
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
                    </div>
                </div>
                    <div class="card-body p-0 table-responsive-sm">
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                <th style="width: 10px">NO</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Tag</th>
                                <th>Created At</th>
                                <th>Author</th>
                                <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($posts->count())
                                @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ $posts->firstItem() + $key }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 100px; overflow: hidden;">
                                            <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="pict">
                                        </div>
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $post->created_at->format('M d, Y') }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('post.destroy', [$post->id]) }}" class="mr-1" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">
                                        <h5 class="text-center">No Posts Found.</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        showing
                        {{ $posts->firstItem() }}
                        to
                        {{ $posts->lastItem() }}
                        of
                        {{ $posts->total() }}
                        entries
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection