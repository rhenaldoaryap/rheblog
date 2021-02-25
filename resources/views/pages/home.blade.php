@extends('layouts.app')

@section('title', 'RheDev_')

@section('content')
    <main>
        <header class="text-white bg-gray-900">
            <div class="flex flex-col items-center px-5 py-5 mx-auto lg:px-20 lg:py-10 lg:flex-row">
                @foreach($featuredPost as $featured)
                <a href="{{ route('details', ['slug' => $featured->slug]) }}" class="flex flex-col items-center">
                    <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
                        <img class="object-cover object-center rounded" alt="hero" src="{{ $featured->image}}">
                    </div>
                </a>
                <div class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-5 lg:items-start lg:text-left">
                    <h1 class="text-2xl font-bold tracking-tighter text-justify text-white lg:text-left lg:text-5xl title-font">
                        {{ $featured->title }}
                    </h1>
                    <p class="my-3">{!! Illuminate\Support\Str::of($featured->description)->words(5) !!}</p>
                    <div class="flex justify-center mt-2">
                        <a href="{{ route('details', ['slug' => $featured->slug]) }}" class="p-2 rounded-md bg-white inline-flex items-center font-semibold text-black md:mb-2 lg:mb-0 hover:text-gray-900 ">
                            Read Article
                            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                fill="currentColor">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </header>
        <div class="bg-gray-900 text-white">
        <div class="flex flex-col lg:flex-row items-start">
            <p class="text-base px-5 mx-5 lg:mx-20 lg:text-lg block rounded-md bg-white text-black uppercase font-bold">Lastest</p>
        </div>
            <div class="px-8 pt-2 mx-auto lg:px-10">
                <div class="flex flex-wrap">
                    @foreach($lastestPost as $post)
                    <div class="px-2 py-2 lg:w-1/3 md:w-full">
                        <div class="border rounded-xl">
                            <a href="{{ route('details', ['slug' => $post->slug]) }}">
                                <img class="object-cover object-center w-full h-64 rounded-t-xl"
                                    src="{{ $post->image }}" alt="content">
                                <div class="px-5">
                                    <h2 class="flex items-center justify-start mt-2 mb-4 text-3xl font-bold leading-none text-left text-white">
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
            <div class="flex flex-col lg:flex-row items-start">
                <p class="text-base px-5 mx-5 lg:mx-20 lg:text-lg block rounded-md bg-white text-black uppercase font-bold">Popular</p>
            </div>
            <div class="bg-gray-900 text-white">
                <div class="px-8 pt-2 mx-auto lg:px-10">
                    <div class="flex flex-wrap">
                        @foreach($popularPost as $popular)
                        <div class="px-2 py-2 lg:w-1/3 md:w-full">
                            <div class="border rounded-xl">
                                <a href="{{ route('details', ['slug' => $popular->slug]) }}">
                                    <img class="object-cover object-center w-full h-64 rounded-t-xl"
                                        src="{{ $popular->image }}" alt="content">
                                    <div class="px-5">
                                        <h2 class="mb-3 text-lg font-semibold text-white lg:text-2xl">
                                            {{ $popular->title }}
                                        </h2>
                                        <p class="mb-4 text-justify leading-relaxed justify-center">
                                            {!! Illuminate\Support\Str::of($popular->description)->words(5) !!}
                                        </p>
                                    </div>
                                    <div class="px-5 my-3">
                                        <span class="bg-gray-200 font-semibold text-black rounded-md mb-10 py-1 px-1">
                                            {{ $popular->category->name }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection