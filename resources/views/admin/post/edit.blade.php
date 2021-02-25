@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Post List</a></li>
                    <li class="breadcrumb-item active">Edit Post</li>
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
                            <h3 class="card-title">You edit post <span class="font-weight-bold text-danger">{{ $post->title }}</span></h3>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Post List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="{{ route('post.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="title">Posts Title</label>
                                            <input type="title" name="title" value="{{ $post->title }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none;" selected>Select Category</option>
                                                @foreach($categories as $c)
                                                <option value="{{ $c->id }}" @if($post->category_id == $c->id) selected @endif>{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                <label for="image">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" id="image" class="custom-file-input">
                                                    <label for="image" class="custom-file-label">Choose File</label>
                                                </div>
                                                </div>
                                                <div class="col-4">
                                                <div style="max-height: 100px; max-width: 100px; overflow: hidden;">
                                                    <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="pict">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tag">Change Post Tag(s)</label>
                                            <div class="d-flex flex-wrap">
                                            @foreach($tags as $tag)
                                            <div class="custom-control custom-checkbox" style="margin-right: 20px;">
                                                <input class="custom-control-input" name="tags[]" type="checkbox" id="tag {{ $tag->id }}" value="{{ $tag->id }}"
                                                @foreach($post->tags as $t)
                                                    @if($tag->id == $t->id) checked @endif
                                                @endforeach>
                                                <label for="tag {{ $tag->id }}" class="custom-control-label">{{ $tag->name }}</label>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control">{{ $post->description }}</textarea>
                                        </div>
                                        <div class="card-group">
                                            <button type="submit" class="btn btn-primary">Update Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Enter description here',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection