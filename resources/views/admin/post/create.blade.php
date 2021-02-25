@extends('layouts.admin')

@section('title', 'Create Posts')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Posts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts List</a></li>
                    <li class="breadcrumb-item active">Create Posts</li>
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
                            <h3 class="card-title">Create Posts</h3>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="title">Posts Title</label>
                                            <input type="title" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter Posts Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none;" selected>Select Category</option>
                                                @foreach($categories as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" id="image" class="custom-file-input">
                                                <label for="image" class="custom-file-label">Choose Image</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tag">Choose Post Tag(s)</label>
                                            <div class="d-flex flex-wrap">
                                            @foreach($tags as $tag)
                                            <div class="custom-control custom-checkbox" style="margin-right: 20px;">
                                                <input class="custom-control-input" name="tags[]" type="checkbox" id="tag {{ $tag->id }}" value="{{ $tag->id }}">
                                                <label for="tag {{ $tag->id }}" class="custom-control-label">{{ $tag->name }}</label>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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