@extends('master.layout')

@section('title')
    Cart
@endsection

@section('content')
    <div class="py-20 bg-gray-100">
        <h1 class="w-[90%] mx-auto mb-10 text-headline font-bold">My Cart</h1>
        <div class="w-[90%] mx-auto justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="md:w-4/5">
                <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                    <input class="mr-5" type="checkbox" name="" id="">
                    <img src="{{ Storage::url('cart/bis.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                    <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-5 sm:mt-2">
                                <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">24 Juli</p>
                                <h2 class="text-heading font-semibold text-gray-900">Search Engine Optimization (SEO)</h2>
                                <p class="mt-1 text-subheading text-gray-700">Tingkatkan market bisnismu!</p>
                                <div class="mt-14 flex flex-row">
                                    <p class="mt-1 text-name font-semibold mr-2">4.5</p>
                                    <svg class="w-4 h-4 mt-1.5 text-maincolor mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <p class="mt-1 text-name text-gray-700">(1.2k ulasan)</p>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                <p class="text-heading font-medium text-right justify-end">B-Academy</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-subheading">Julius Hartanto</p>
                                </div>
                                <div class="flex items-end justify-end space-x-4">
                                    <p class="text-heading font-semibold">Rp250.000</p>
                                    <span class="cursor-pointer rounded text-white py-2 px-2 duration-100 bg-red hover:bg-darkblue hover:text-blue-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-4 flex justify-between">
                            <p class="mt-1 text-name text-gray-700">Beginner • 3 bulan</p>
                            <p class="mt-1 text-name text-gray-700">5 hari tersisa untuk mendaftar</p>
                        </div>
                    </div>

                </div>
                <hr class="" />
                <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                    <input class="mr-5" type="checkbox" name="" id="">
                    <img src="{{ Storage::url('cart/bis2.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                    <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-5 sm:mt-2">
                                <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">26 Juli</p>
                                <h2 class="text-heading font-semibold text-gray-900">E-Commerce (Retail)</h2>
                                <p class="mt-1 text-subheading text-gray-700">Bangun bisnis e-commerce pertamamu!</p>
                                <div class="mt-14 flex flex-row">
                                    <p class="mt-1 text-name font-semibold mr-2">4.8</p>
                                    <svg class="w-4 h-4 mt-1.5 text-maincolor mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <p class="mt-1 text-name text-gray-700">(2.2k ulasan)</p>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                <p class="text-heading font-medium text-right justify-end">Commerce Up</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-subheading">Dina Wijaya</p>
                                </div>
                                <div class="flex items-end justify-end space-x-4">
                                    <p class="text-heading font-semibold">Rp300.000</p>
                                    <span class="cursor-pointer rounded text-white py-2 px-2 duration-100 bg-red hover:bg-darkblue hover:text-blue-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-4 flex justify-between">
                            <p class="mt-1 text-name text-gray-700">Beginner • 6 bulan</p>
                            <p class="mt-1 text-name text-gray-700">7 hari tersisa untuk mendaftar</p>
                        </div>
                    </div>

                </div>
                <hr class="" />
                <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                    <input class="mr-5" type="checkbox" name="" id="">
                    <img src="{{ Storage::url('cart/bis3.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                    <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-5 sm:mt-2">
                                <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">28 Juli</p>
                                <h2 class="text-heading font-semibold text-gray-900">Business Analyst</h2>
                                <p class="mt-1 text-subheading text-gray-700">Belajar semua tentang dunia bisnis analyst</p>
                                <div class="mt-14 flex flex-row">
                                    <p class="mt-1 text-name font-semibold mr-2">4.7</p>
                                    <svg class="w-4 h-4 mt-1.5 text-maincolor mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <p class="mt-1 text-name text-gray-700">(1k ulasan)</p>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                <p class="text-heading font-medium text-right justify-end">A-Learn</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-subheading">Joko Sudianto</p>
                                </div>
                                <div class="flex items-end justify-end space-x-4">
                                    <p class="text-heading font-semibold">Rp200.000</p>
                                    <span class="cursor-pointer rounded text-white py-2 px-2 duration-100 bg-red hover:bg-darkblue hover:text-blue-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-4 flex justify-between">
                            <p class="mt-1 text-name text-gray-700">Beginner • 5 bulan</p>
                            <p class="mt-1 text-name text-gray-700">9 hari tersisa untuk mendaftar</p>
                        </div>
                    </div>

                </div>
                <hr class="" />

            </div>
            <!-- Checkout -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/5">
                <div class="mb-5 flex justify-start">
                    <input type="checkbox" name="" id="">
                    <p class="ml-1.5 text-sm text-gray-700">Pilih Semua</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold">Estimated Total</p>
                </div>
                <p class="mb-5 text-base text-gray-700 font-medium">Rp 0</p>
                <hr class="my-3" />
                <a href="{{ url('/checkout') }}" class="flex items-center">
                    <button class="mt-4 w-full rounded-md bg-green py-1.5 font-medium text-white hover:bg-darkblue">Checkout (0)</button>
                </a>
            </div>
        </div>
    </div>
@endsection
