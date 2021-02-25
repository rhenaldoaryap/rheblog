@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div class="bg-gray-900 text-white">
        <div class="px-8 pt-2 mx-auto lg:px-10">
            <div class="flex flex-wrap">
                @foreach($posts as $post)
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <div class="border rounded-xl">
                        <a href="{{ route('details', ['slug' => $post->slug]) }}">
                            <img class="object-cover object-center w-full h-64 rounded-t-xl"
                                src="{{ $post->image }}" alt="content">
                            <div class="px-5">
                                <h2 class="mb-3 text-lg font-semibold text-white lg:text-2xl">
                                    {{ $post->title }}
                                </h2>
                                <p class="mb-4 text-justify leading-relaxed justify-center">
                                    {!! Illuminate\Support\Str::of($post->description)->words(5) !!}
                                </p>
                            </div>
                            <div class="px-5 my-3">
                                <span class="bg-gray-200 font-semibold text-black rounded-md mb-10 py-1 px-1">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection