@extends('master.layout')

@section('title')
    Category
@endsection

@php
    $gambarUrls = ['category/prog-1.png', 'category/prog-2.png', 'category/prog-3.png', 'category/prog-4.png', 'category/prog-5.png'];
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
                            Tampilkan kekuatan kreativitas Anda dalam eksplorasi mendalam tentang dunia desain. Dalam halaman ini, kami membuka pintu untuk memahami setiap aspek desain, mulai dari konsep awal hingga pelaksanaan yang cermat. Temukan inspirasi yang tak terbatas dan pengetahuan mendalam yang akan membantu Anda memahami daya tarik desain modern. Dari seni visual hingga praktik terbaik dalam industri, kami menyajikan wawasan yang mendalam untuk membantu Anda berkembang sebagai seorang desainer yang berbakat.
                        </p>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <img src="{{ Storage::url('category/desainHero.png') }}" alt="Desain Hero" class="mx-auto"> <!-- Tambah class mx-auto untuk mengatur gambar agar tetap berada di tengah -->
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

    {{-- Program segera dimulai --}}
    <div class="relative top-[-228px]">
        <div class="w-11/12 mx-auto py-20 ">
            <h1 class="text-title font-bold mb-8">Program segera dimulai</h1>
            <div class="shadow-2xl rounded-md">
                @for ($i = 0; $i < count($gambarUrls); $i++)
                    <div class="bg-whiteblue p-6 md:p-8 md:flex md:flex-row items-center justify-center">
                        <img class="w-full rounded md:w-1/5 h-auto mb-6 md:mb-0 object-cover"
                            src="{{ Storage::url($gambarUrls[$i]) }}" alt="program {{ $i + 1 }}">
                        <div class="md:ml-6 flex-grow">
                            <p class="text-subname bg-lightblue w-16 text-center rounded-full mb-2 md:mb-1">24 Juli</p>
                            <h3 class="font-semibold text-subheading">Lorem Ipsum</h3>
                            <p class="text-gray-600 font-normal text-sm mb-4">Lorem ipsum dolor sit amet, consectetur
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
                                <p class="text-xs">Seats: 5/20</p>
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
    </div>
@endsection
