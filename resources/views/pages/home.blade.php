@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
    <img class="-z-10 absolute top-0 left-0 w-screen -translate-y-24" src="{{ Storage::url('home/background.png') }}" alt="background image">
    <div class="w-[90%] m-auto">
        <div class="py-20 w-full flex justify-between items-center">
            <div class="flex flex-col gap-5 w-[55%]">
                <h1 class="text-headline text-black font-bold"><span class="text-darkblue">Mulai Kejar</span> Impianmu dalam Hitungan Bulan</h1>
                <p class="w-4/5 text-heading text-black font-light mb-10">Temukan potensi, tingkatkan kompetensi. Bersama JEFDEMY, raih karier impian!</p>
                <a class="btn-primary px-12 py-2" href="">Memulai</a>
            </div>
            <img class="w-[44%]" src="{{ Storage::url('home/person.png') }}" alt="person image">
        </div>

        <div>
            
        </div>
    </div>
@endsection
