@extends('layouts.app')

@section('title', 'RheDev_ Article')

@section('content')
    <div class="bg-gray-900 font-semibold">
        <div class="px-8 mx-auto lg:px-10">
            <div class="flex-1 mx-auto ">
                <div class="grid gap-8 grid-cols-dense">
                    <div class="lg:col-start-1 col-span-full lg:col-span-5">
                        <div class="relative flex flex-col h-full px-6 bg-gray-100 shadow-xl rounded-xl dark:bg-gray-900 sm:py-10 lg:px-10">
                            <div class="mt-5 w-full lg:mt-1">
                                <img alt="gallery" class="inset-0 block object-cover object-center w-full h-full rounded-xl" src="{{ $post->image }}">
                            </div>
                            <div class="w-full p-2 py-4 text-left lg:p-2">
                                <h1 class="mt-auto mb-2 font-sans text-2xl font-black tracking-tighter text-cyan-500 text-gray-900">
                                    {{ $post->title }}
                                </h1>
                                <div>
                                    <span class="text-sm leading-relaxed text-gray-900">
                                        Written by {{ $post->user->name }} at {{ $post->created_at->format('M d, Y')}}
                                        <br />
                                        <div class="flex flex-row">
                                            <svg class="w-6 h-6 inline-flex" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="mx-2">{{ views($post)->count() }}</span>
                                        </div>
                                    </span>
                                </div>
                                <p class="mt-4 leading-relaxed tracking-tighter text-md text-gray-300 text-justify">
                                {!! $post->description !!}
                                </p>
                            </div>
                            <hr />
                            <div class="px-2 my-2">
                                @if($post->tags()->count() > 0)
                                @foreach($post->tags as $tag)
                                    <a href="{{ route('tags', ['slug' => $tag->slug]) }}" class="bg-blue-500 text-white rounded-lg py-1 px-1">#{{ $tag->name }}</a>
                                @endforeach
                                @endif
                            </div>
                        <div class="mt-5" id="dsq-count-scr"></div>
                        <div id="disqus_thread"></div>
                        </div>
                    </div>
                    <div class="hidden lg:col-end-7 col-span-full lg:col-span-1 lg:block">
                        <div class="flex flex-wrap h-full px-6 bg-gray-100 shadow-xl rounded-xl dark:bg-gray-900 sm:py-10 lg:px-10 ">
                            <div class="z-10 w-full text-left">
                                <h2 class="mt-auto mb-2 font-sans text-2xl font-black tracking-tighter text-cyan-500 text-black">
                                    Popular Posts
                                </h2>
                                @foreach($popularPost as $popular)
                                <a href="{{ route('details', ['slug' => $popular->slug]) }}">
                                    <h3 class="mt-6 mb-2 font-sans text-lg font-black tracking-tighter text-cyan-700 dark:text-cyan-700 text-black">
                                        {{ $popular-> title }}
                                    </h3>
                                    <img src="{{ $popular->image }}" alt="article">
                                    <p class="mt-4 text-sm leading-relaxed tracking-tighter text-gray-700">
                                        {!! Illuminate\Support\Str::of($popular->description)->words(5) !!}
                                    </p>
                                </a>
                                <hr class="my-4 border dark:border-gray-700">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-8 mx-auto lg:px-10 py-5">
            <span class="bg-white rounded-md text-black uppercase p-2 font-bold">Baca Juga</span>
        </div>
        <div class="bg-gray-900 text-white">
            <div class="px-8 pt-2 mx-auto lg:px-10">
                <div class="flex flex-wrap">
                    @foreach($relatedPost as $related)
                    <div class="px-2 py-2 lg:w-1/3 md:w-full">
                        <div class="border rounded-xl">
                            <a href="{{ route('details', ['slug' => $related->slug]) }}">
                                <img class="object-cover object-center w-full h-64 rounded-t-xl"
                                    src="{{ $related->image }}" alt="content">
                                <div class="px-5">
                                    <h2 class="mb-3 text-lg font-semibold text-white lg:text-2xl">
                                        {{ $related->title }}
                                    </h2>
                                    <p class="mb-4 text-justify leading-relaxed justify-center">
                                        {!! Illuminate\Support\Str::of($related->description)->words(5) !!}
                                    </p>
                                </div>
                                <div class="px-5 my-3">
                                    <span class="bg-gray-200 font-semibold text-black rounded-md mb-10 py-1 px-1">
                                        {{ $related->category->name }}
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
@endsection

@section('script')
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://rhedev-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//rhedev-com.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection