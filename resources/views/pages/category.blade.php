@extends('master.layout')

@section('title')
    Category
@endsection

@php
    $gambarUrls = ['category/prog-1.png', 'category/prog-2.png', 'category/prog-3.png', 'category/prog-4.png', 'category/prog-5.png'];

    $items = [
        [
            'banner' => 'category/banner-1.png',
            'logo' => 'category/logo-1.png',
            'nama_perusahaan' => 'Nama Perusahaan 1',
            'rating' => '4.6',
            'ulasan' => '8.2k ulasan',
            'peserta' => '1.2k Peserta',
            'bootcamp' => '35 Bootcamp',
        ],
        [
            'banner' => 'category/banner-2.jpg',
            'logo' => 'category/logo-2.png',
            'nama_perusahaan' => 'Nama Perusahaan 2',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-3.jpg',
            'logo' => 'category/logo-3.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-4.jpg',
            'logo' => 'category/logo-4.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-5.jpg',
            'logo' => 'category/logo-5.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-3.jpg',
            'logo' => 'category/logo-3.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-4.jpg',
            'logo' => 'category/logo-4.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
        [
            'banner' => 'category/banner-5.jpg',
            'logo' => 'category/logo-5.jpg',
            'nama_perusahaan' => 'Nama Perusahaan 3',
            'rating' => '4.7',
            'ulasan' => '7.5k ulasan',
            'peserta' => '1.5k Peserta',
            'bootcamp' => '40 Bootcamp',
        ],
    ];
@endphp

@section('content')
    <div class="bg-llightblue pb-56 mx-auto">
        <div class="w-11/12 mx-auto">
            <div class="flex flex-col-reverse md:flex-row items-center py-8">
                <div class="mx-2 md:w-1/2 flex justify-center items-center">
                    <div>
                        <h1 class="font-bold my-4 text-headline text-black text-center md:text-left">
                            Desain
                        </h1>
                        <p class="my-6 font-normal text-center md:text-left">
                            Tampilkan kekuatan kreativitas Anda dalam eksplorasi mendalam tentang dunia desain. Dalam
                            halaman ini, kami membuka pintu untuk memahami setiap aspek desain, mulai dari konsep awal
                            hingga pelaksanaan yang cermat. Temukan inspirasi yang tak terbatas dan pengetahuan mendalam
                            yang akan membantu Anda memahami daya tarik desain modern. Dari seni visual hingga praktik
                            terbaik dalam industri, kami menyajikan wawasan yang mendalam untuk membantu Anda berkembang
                            sebagai seorang desainer yang berbakat.
                        </p>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <img src="{{ Storage::url('category/desainHero.png') }}" alt="Desain Hero" class="mx-auto">
                    <!-- Tambah class mx-auto untuk mengatur gambar agar tetap berada di tengah -->
                </div>
            </div>


            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 text-center text-black font-medium text-name">
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Web</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Grafis & Ilustrasi</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Alat Desain</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Game</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">3D dan Animasi</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Fashion</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Arsitektur</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Interior</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Pengalaman Pengguna</a>
                <a class="h-20 bg-whiteblue w-60 flex items-center justify-center rounded-lg hover:shadow-md hover:border-2 hover:border-maincolor hover:bg-llightblue transition duration-300"
                    href="#">Desain Lainnya</a>
            </div>
        </div>
    </div>

    <div class="relative top-[-228px] -mb-44">

        {{-- Program segera dimulai --}}
        <div class="w-11/12 mx-auto py-20 ">
            <h1 class="text-title font-bold mb-8">Program segera dimulai</h1>
            <div class="shadow-xl rounded-md">
                @for ($i = 0; $i < count($gambarUrls); $i++)
                    <div class="bg-whiteblue p-6 md:p-8 md:flex md:flex-row items-center justify-center">
                        <img class="w-full rounded md:w-1/5 h-auto mb-6 md:mb-0 object-cover"
                            src="{{ Storage::url($gambarUrls[$i]) }}" alt="program {{ $i + 1 }}">
                        <div class="md:ml-6 flex-grow">
                            <p class="text-subname bg-lightblue w-16 text-center rounded-full mb-2 md:mb-1">24 Juli</p>
                            <h3 class="font-semibold text-subheading">Lorem Ipsum</h3>
                            <p class="text-gray-600 font-normal text-sm mb-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam venenatis tincidunt feugiat. Morbi eget erat ut velit sollicitudin
                                sollicitudin a eget mauris. Integer interdum tempus neque, vel accumsan ligula finibus.</p>

                            <div class="ulasan flex items-center">
                                <h3 class="font-semibold">4.6</h3>
                                <svg class="ml-1 w-4 h-4 text-darkblue" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="ml-1 text-xs text-gray-700 font-light">(8.2k ulasan)</p>
                            </div>
                            <p class="text-xs font-light text-gray-600">Mudah • 6 bulan</p>
                        </div>

                        <div
                            class="text-left mt-4 md:mt-0 md:text-right md:pl-16 md:block md:flex-grow flex-row flex justify-between">
                            <div class="bootDetail mb-0 md:mb-4">
                                <h3 class="text-sm md:text-name mb-0.5 md:w-48 w-11">Bootcamp Company</h3>
                                <h5 class="font-light text-xs">Bootcamp Instruktur</h5>
                            </div>

                            <div class="price mb-0 md:mb-4">
                                <h2 class="font-bold mb-0.5">Price</h2>
                                <p class="text-xs font-light ">Seats: 5/20</p>
                            </div>

                            <div class="last">
                                <div
                                    class="flex bg-darkblue h-9 md:w-48   rounded-md text-white items-center justify-center mb-1">
                                    <a href="#">Learn More</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2.5" stroke="currentColor" class="w-4 h-4 mx-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </div>
                                <h5 class="font-light text-xs">3 hari tersisa untuk mendaftar</h5>
                            </div>

                        </div>
                    </div>
                    @if ($i != 4)
                        <hr class="h-0.5 w-[96%] mx-auto bg-gray-300" />
                    @endif
                @endfor
            </div>
        </div>

        {{-- Bootcamp Populer --}}
        <div class="w-11/12 mx-auto mb-20">
            <h1 class="text-title font-bold mb-8">Penyedia Bootcamp Populer</h1>

            <div class="horizontalScroll flex items-center">
                <button type="button"
                    class="scroll-right-button text-white bg-slate-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-400 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center ml-2 h-11 w-h-11">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    <span class="sr-only">Scroll Right</span>
                </button>

                <div class="flex overflow-x-auto hide-scroll-bar">
                    @foreach ($items as $item)
                        <div class="container mr-5 bg-lightblue h-44 rounded w-fit flex-shrink-0">
                            <img class="w-72 rounded-t-default h-11 object-cover" src="{{ Storage::url($item['banner']) }}"
                                alt="banner bootcamp">
                            <div class="konten flex relative -top-7">
                                <img class="ml-3 w-14 h-14 border-[2.5px] border-lightblue rounded-full object-cover"
                                    src="{{ Storage::url($item['logo']) }}" alt="lego brand">
                                <div class="ml-2 mt-10">
                                    <h1 class="text-name font-semibold mb-1">{{ $item['nama_perusahaan'] }}</h1>
                                    <div class="ulasan flex items-center mb-1">
                                        <h3 class="font-semibold text-subname">{{ $item['rating'] }}</h3>
                                        <svg class="ml-1 w-4 h-4 text-darkblue" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ml-1 text-xs text-gray-700 font-light">{{ $item['ulasan'] }}</p>
                                    </div>
                                    <p class="text-subname text-[#444444] mb-0.5">{{ $item['peserta'] }}</p>
                                    <p class="text-subname text-[#444444]">{{ $item['bootcamp'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button"
                    class="scroll-left-button text-white bg-slate-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-400 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 h-11 w-11">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    <span class="sr-only">Scroll Left</span>
                </button>
            </div>

            <style>
                .hide-scroll-bar {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }

                .hide-scroll-bar::-webkit-scrollbar {
                    display: none;
                }
            </style>

        </div>

        {{-- All Bootcamp --}}
        <div class="all bootcamp w-11/12 mb-4 mx-auto">
            <h1 class="text-title font-bold">Semua Bootcamp Desain</h1>
            <div class="rounded-md">
                @for ($i = 0; $i < count($gambarUrls); $i++)
                    <div class="md:py-8 md:flex md:flex-row items-center justify-center">
                        <img class="w-full rounded md:w-1/5 h-auto mb-6 md:mb-0 object-cover"
                            src="{{ Storage::url($gambarUrls[$i]) }}" alt="program {{ $i + 1 }}">
                        <div class="md:ml-6 flex-grow">
                            <p class="text-subname bg-lightblue w-16 text-center rounded-full mb-2 md:mb-1">24 Juli</p>
                            <h3 class="font-semibold text-subheading">Lorem Ipsum</h3>
                            <p class="text-gray-600 font-normal text-sm mb-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam venenatis tincidunt feugiat. Morbi eget erat ut velit sollicitudin
                                sollicitudin a eget mauris. Integer interdum tempus neque, vel accumsan ligula finibus.</p>

                            <div class="ulasan flex items-center">
                                <h3 class="font-semibold">4.6</h3>
                                <svg class="ml-1 w-4 h-4 text-darkblue" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="ml-1 text-xs text-gray-700 font-light">(8.2k ulasan)</p>
                            </div>
                            <p class="text-xs font-light text-gray-600">Mudah • 6 bulan</p>
                        </div>

                        <div
                            class="text-left mt-4 md:mt-0 md:text-right md:pl-16 md:block md:flex-grow flex-row flex justify-between">
                            <div class="bootDetail mb-0 md:mb-4">
                                <h3 class="text-sm md:text-name mb-0.5 md:w-48 w-11">Bootcamp Company</h3>
                                <h5 class="font-light text-xs">Bootcamp Instruktur</h5>
                            </div>

                            <div class="price mb-0 md:mb-4">
                                <h2 class="font-bold mb-0.5">Rp 12.000</h2>
                                <p class="text-xs font-light">Seats: 5/20</p>
                            </div>

                            <div class="last">
                                <div
                                    class="flex bg-darkblue h-9 md:w-48   rounded-md text-white items-center justify-center mb-1">
                                    <a href="#">Learn More</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2.5" stroke="currentColor" class="w-4 h-4 mx-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </div>
                                <h5 class="font-light text-xs">3 hari tersisa untuk mendaftar</h5>
                            </div>

                        </div>
                    </div>
                    @if ($i != 4)
                        <hr class="h-0.5 w-full mx-auto bg-gray-300" />
                    @endif
                @endfor
            </div>
        </div>

        {{-- Pagination --}}
        <div class="lg:w-3/5 w-full mb-10  mx-auto flex items-center justify-between border-t border-gray-200">
            <div class="flex items-center pt-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-sm ml-3 font-medium leading-none ">Previous</p>
            </div>
            <div class="sm:flex hidden">
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    1</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    2</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    3</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-indigo-700 border-t border-indigo-400 pt-3 mr-4 px-2">
                    4</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    5</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    6</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    7</p>
                <p
                    class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">
                    8</p>
            </div>
            <div class="flex items-center pt-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
                <p class="text-sm font-medium leading-none mr-3">Next</p>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>
    </div>
@endsection
