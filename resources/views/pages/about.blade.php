@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="text-gray-700 body-font">
    <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 md:flex-row">
        <div class="flex flex-col items-center w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0 lg:text-center">
            <h2 class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-5xl title-font">
                Tentang Kami.
            </h2>
            <p class="mb-8 text-base leading-relaxed text-justify text-gray-700 lg:text-1xl">
                RheDev_ adalah blog pribadi milik <a class="text-blue-500" href="https://www.instagram.com/rhenaldoarya/">Rhenaldo Arya</a> yang bertujuan untuk saling berbagi tentang pengetahuan seputar dunia pemrograman web dan pariwisata.
                <br />
                Setiap artikel dan video youtube yang saya buat, saya berusaha semaksimal mungkin untuk menjaga kualitas konten saya lebih baik dan terus baik. Sekiranya dibutuhkan referensi terhadap artikel atau video youtube yang saya buat, saya akan menuliskan sumber referensi yang menjadi acuan saya.
                <br />
                Jika kamu memiliki kritik dan saran kamu bisa menghubungi saya dengan melakukan klik tomboh dibawah atau lihat bagian bawah website ini. Terima kasih
            </p>
            <div class="flex justify-center">
                <a href="https://www.instagram.com/rhenaldoarya/" class="flex items-center px-4 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:shadow-outline focus:outline-none">
                    Kontak
                </a>
                <p class="mt-2 text-sm text-center text-gray-600 md:ml-6 md:mt-0 sm:text-left">
                    "The best way to become an expert is teaching the others"
                    <br class="hidden lg:block">
                    <a href="{{ url('/') }}" class="bg-gray-300 rounded-md p-1 inline-flex items-center font-semibold text-blue-700 md:mb-2 lg:mb-0 hover:text-blue-400 ">
                        Read Article
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="20" height="20" fill="currentColor">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
        <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
            <img class="object-cover object-center rounded-lg " alt="hero"
                src="{{ asset('images/about.jpg') }}">
        </div>
    </div>
</section>
@endsection