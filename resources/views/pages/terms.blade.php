@extends('layouts.app')

@section('title', 'Terms and Condition')

@section('content')
<section class="text-gray-700 body-font">
    <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 md:flex-row">
        <div class="flex flex-col items-center w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0 lg:text-center">
            <h2 class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-5xl title-font">
                Terms and Condition.
            </h2>
            <p class="mb-8 text-base leading-relaxed text-justify text-gray-700 lg:text-1xl">
                Dengan mengakses website ini berarti Anda telah memahami dan menyetujui untuk terikat dan tunduk dengan semua peraturan yang ada disini. Jika Anda tidak setuju untuk terikat dan tunduk dengan semua peraturan yang berlaku, silahkan untuk tidak mengakses situs ini.
                <br />
                <span class="font-bold text-2xl uppercase">Perubahan Terms and Condition</span>
                <br />
                Saya berhak untuk mengubah terms and condition setiap waktu baik itu menambah atau mengurangi. Anda terikat oleh setiap perubahan tersebut oleh karena itu secara berkala Anda diharapkan untuk mengunjungi bagian terms and condition secara berkala untuk melihat dan memahami terms and condition yang berlaku dan mengikat Anda.
                <span class="font-bold text-2xl uppercase">Hak Milik</span>
                <br />
                Seluruh rancangan design, gambar, artwork, audio, video serta kode pemrograman(selanjunya disebut 'konten') didalam situs ini adalah hak cipta milik website ini. Anda tidak diperkenankan untuk memodifikasi, menyalin, mengubah atau menambah rancangan design, gambar, artwork, audio, video serta kode pemrograman dalam fasilitas ini dalam keadaan apapun dan kapanpun.
                <br />
                <span class="font-bold text-2xl uppercase">Link situs lain</span>
                <br />
                Website ini mungkin menyediakan tautan (link) ke berbagai situs pihak ketiga, termasuk tautan yang disediakan pada halaman hasil pencarian. Beberapa tautan situs tersebut mungkin mengandung materi yang tidak menyenangkan, tidak sesuai hukum atau tidak akurat. Tautan tersebut tidak memperlihatkan bahwa kami menyetujui situs pihak ketiga tersebut. Anda mengetahui dan menyetujui bahwa kami tidak bertanggung jawab atas konten atau materi lainnya yang ada pada situs pihak ketiga tersebut. Setiap perjanjian dan transaksi antara Anda dan pengiklan yang ada di website ini adalah antara Anda dan pengiklan dan Anda mengetahui dan setuju bahwa kami tidak bertanggung jawab atas setiap kehilangan atau klaim yang mungkin disebabkan oleh perjanjian atau transaksi antara Anda dengan pengiklan, tautan tersebut ditujukan hanya sebagai bahan referensi Anda. website ini tidak bertanggung jawab atas keakuratan, kelengkapan, dan kebenaran materi dalam website-website tersebut.
                <br />
                Jika merasa keberatan dan ingin menghubungi pemilik website ini, silahkan klik baigan kontatk dibawah ini.
                <br />
                Terima kasih.
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
                src="{{ asset('images/privacy.jpg')}}">
        </div>
    </div>
</section>
@endsection