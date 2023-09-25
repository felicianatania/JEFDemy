@extends('master.layout')

@section('title')
    Cart
@endsection

@section('content')
<div class="py-20 bg-gray-100">
    <div class="w-[90%] mx-auto">
        <a href="{{ url('/cart') }}" class="text-subheading text-maincolor hover:text-black">
            <button type="button" class="mb-8 mr-5 inline-block rounded-full bg-primary px-6 py-6 font-medium uppercase leading-normal text-darkblue shadow-[-9px_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-maincolor focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>
            Kembali ke Cart
        </a>
    </div>
    <h1 class="w-[90%] mx-auto mb-10 text-headline font-bold">Checkout</h1>
    <div class="w-[90%] mx-auto justify-center px-6 md:flex md:space-x-6 xl:px-0">
        <div class="md:w-4/5">
            <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                <img src="{{ Storage::url('cart/bis.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-2">
                            <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">24 Juli</p>
                            <h2 class="text-heading font-semibold text-gray-900">Search Engine Optimization (SEO)</h2>
                            <p class="mt-1 text-subheading text-gray-700">Tingkatkan market bisnismu!</p>
                            <div class="mt-20 flex flex-row">
                                <p class="text-heading font-semibold">Rp250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="" />
            <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                <img src="{{ Storage::url('cart/bis2.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-2">
                            <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">26 Juli</p>
                            <h2 class="text-heading font-semibold text-gray-900">E-Commerce (Retail)</h2>
                            <p class="mt-1 text-subheading text-gray-700">Bangun bisnis e-commerce pertamamu!</p>
                            <div class="mt-20 flex flex-row">
                                <p class="text-heading font-semibold">Rp300.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="" />
            <div class=" bg-whiteblue p-6 shadow-md sm:flex sm:justify-start">
                <img src="{{ Storage::url('cart/bis3.jpg') }}" alt="product-image" class="w-full sm:w-80" />
                <div class="flex flex-col sm:flex sm:w-full sm:justify-between px-6">
                    <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-2">
                            <p class="mb-4 py-1 text-subname bg-lightblue rounded-full text-center w-16">28 Juli</p>
                            <h2 class="text-heading font-semibold text-gray-900">Business Analyst</h2>
                            <p class="mt-1 text-subheading text-gray-700">Belajar semua tentang dunia bisnis analyst</p>
                            <div class="mt-20 flex flex-row">
                                <p class="text-heading font-semibold">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="" />
            <div class="bg-whiteblue p-6 shadow-md sm:flex sm:justify-between">
                    <span class="text-title font-semibold">Subtotal</span>
                    <span class="text-title font-semibold">Rp750.000</span>
            </div>

        </div>
        <!-- Checkout -->
        <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/5">
            <p class="text-heading font-semibold mb-4">Rincian Pesanan</p>
            <div class="mb-2 flex justify-between">
                <p class="text-gray-700">Total Harga (3 produk)</p>
                <p class="text-gray-700">Rp750.000</p>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-700">Diskon</p>
                <p class="text-gray-700">Rp50.000</p>
            </div>
            <hr class="my-4" />
            <div class="flex justify-between">
                <p class="text-heading font-semibold">Total Harga</p>
                <div class="">
                <p class="mb-1 text-heading font-semibold">Rp700.000</p>
                </div>
            </div>
            <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Pilih Pembayaran</button>
        </div>
    </div>
</div>

{{-- Pop Up --}}
<div class="mt-10 fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
    <div class="max-h-full w-full max-w-xl overflow-y-auto bg-white">
        <div class="w-full">
            <div class="m-8 my-5 w-[85%] mx-auto">
                <div class="flex flex-row items-center justify-start mb-4">
                    <a href="{{ url('/checkout') }}">
                        <button type="button" class="text-maincolor bg-transparent hover:text-gray-900 w-8 h-8" data-modal-hide="defaultModal">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </a>
                    <h1 class="ml-2 text-3xl font-extrabold">Pembayaran</h1>
                </div>
                <div class="mb-5">
                    <p class="text-gray-600 text-subheading">Finish your payment in <span class="text-orange">00 : 28 : 54</span></p>
                </div>
                <hr class="h-px my-3 bg-lightblue border-0 dark:bg-lightblue">
                <div class="flex flex-row justify-between mb-3">
                    <span class="text-heading font-semibold">Metode Pembayaran</span>
                    <span class="text-subname text-maincolor mt-1">Lihat semua</span>
                </div>
                <div class="space-y-4 mb-6">
                    <div class="flex flex-row justify-between bg-graywhite border rounded-lg px-4">
                        <div class="flex flex-row items-center justify-start">
                            <img src="{{ Storage::url('payment/bca.png') }}" alt="">
                            <button class="p-3 w-full font-semibold">BCA Virtual Account</button>
                        </div>
                        <input type="radio" name="" id="">
                    </div>
                    <div class="flex flex-row justify-between bg-graywhite border rounded-lg px-4">
                        <div class="flex flex-row items-center justify-start">
                            <img src="{{ Storage::url('payment/mandiri.png') }}" alt="">
                            <button class="p-3 w-full font-semibold">Mandiri Virtual Account</button>
                        </div>
                        <input type="radio" name="" id="">
                    </div>
                </div>
                <hr class="h-px my-3 bg-lightblue border-0 dark:bg-lightblue">
                <div class="text-heading font-semibold">Ringkasan Pesanan</div>
                <div class="flex flex-row justify-between mt-6">
                    <span class="text-name font-semibold">Total Harga</span>
                    <span class="text-subheading font-semibold mt-1">Rp750.000</span>
                </div>
                <div class="flex flex-row justify-between mb-10 mt-2">
                    <span class="text-name font-semibold">Diskon</span>
                    <span class="text-subheading font-semibold mt-1">Rp50.000</span>
                </div>
                <hr class="h-px my-3 bg-gray-200 h-1 border-0">
                <div class="flex flex-row justify-between mb-3 mt-2">
                    <span class="text-heading font-semibold">Total Tagihan</span>
                    <span class="text-heading text-orange font-semibold mt-1">Rp700.000</span>
                </div>
                <button class="p-3 text-white text-heading bg-darkblue border rounded-md w-full font-semibold">Bayar dengan Virtual Account</button>
            </div>
        </div>
    </div>
</div>
@endsection
