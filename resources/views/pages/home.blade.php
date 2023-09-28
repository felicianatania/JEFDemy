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
    </div>

    <div class="px-[5%] py-10 w-full flex justify-between items-center" style="background: linear-gradient(57deg, #DDE3F9 28.49%, rgba(221, 227, 249, 0.00) 77.5%);">
        <img class="w-[25%]" src="{{ Storage::url('home/study.png') }}" alt="study image">
        <div class="w-[70%] text-left">
            <div class="flex items-center gap-10">
                <h1 class="w-[38%] text-[25px] text-black font-semibold">Ketahui tentang platform pembelajaran <span style="background: linear-gradient(252deg, #0085FF 22.02%, #FF0387 47.22%, #FDD92C 80.6%);-webkit-background-clip: text;background-clip: text;color: transparent;">JEF</span>DEMY</h1>
                <div class="p-2 border border-maincolor rounded">
                    <h2 class="text-subheading text-black font-semibold">2rb+</h2>
                    <p class="text-name text-black font-light">Bootcamp Aktif</p>
                </div>
                <div class="p-2 border border-maincolor rounded">
                    <h2 class="text-subheading text-black font-semibold">2rb+</h2>
                    <p class="text-name text-black font-light">Bootcamp Aktif</p>
                </div>
            </div>
            <p class="my-10 text-name text-black font-light">Platform pendidikan yang menghubungkan Anda dengan bootcamp terbaik. Kami hadir untuk membantu Anda mencapai impian karir melalui akses mudah ke program-program pembelajaran yang relevan. Temukan bootcamp terverifikasi di berbagai bidang dan dapatkan dukungan untuk pendiri bootcamp.</p>
            <div class="w-full flex justify-between items-center">
                <div class="w-[47.5%]">
                    <div class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Katalog bootcamp yang lengkap</p>
                    </div>
                    <div class="my-5 flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Mempertemukan penjual dan pembeli</p>
                    </div>
                    <div class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Pemilihan kategori yang lengkap</p>
                    </div>
                </div>
                <div class="w-[47.5%]">
                    <div class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Transaksi aman dan terjamin</p>
                    </div>
                    <div class="my-5 flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Dukungan untuk pendiri bootcamp</p>
                    </div>
                    <div class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M8.125 0C3.64492 0 0 3.64492 0 8.125C0 12.6051 3.64492 16.25 8.125 16.25C12.6051 16.25 16.25 12.6051 16.25 8.125C16.25 3.64492 12.6051 0 8.125 0ZM12.3535 5.40195L7.10352 11.652C7.04593 11.7205 6.97427 11.776 6.89339 11.8144C6.81252 11.8529 6.72432 11.8736 6.63477 11.875H6.62422C6.53662 11.875 6.45 11.8565 6.36999 11.8209C6.28997 11.7852 6.21835 11.7331 6.15977 11.668L3.90977 9.16797C3.85262 9.10736 3.80817 9.03594 3.77903 8.95791C3.74988 8.87988 3.73662 8.79681 3.74004 8.71358C3.74346 8.63036 3.76348 8.54865 3.79892 8.47327C3.83436 8.39789 3.88452 8.33036 3.94643 8.27464C4.00835 8.21892 4.08078 8.17614 4.15947 8.14881C4.23815 8.12148 4.32151 8.11016 4.40463 8.11551C4.48776 8.12085 4.56898 8.14276 4.64351 8.17995C4.71805 8.21713 4.7844 8.26884 4.83867 8.33203L6.60781 10.2977L11.3965 4.59805C11.5039 4.47386 11.6559 4.39693 11.8195 4.38389C11.9832 4.37084 12.1455 4.42274 12.2712 4.52835C12.3969 4.63396 12.476 4.7848 12.4914 4.94827C12.5068 5.11175 12.4573 5.27471 12.3535 5.40195Z" fill="#879EEB"/>
                        </svg>
                        <p class="text-subheading text-black font-medium">Penggunaan yang mudah dan intuitif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[90%] mx-auto my-10">
        <h1 class="text-title text-black font-semibold mb-5">Kategori</h1>
        <div class="flex gap-7">
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-desain-1 to-desain-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M29.7254 12.8736L22.1264 5.27459L24.6743 2.72669C25.3597 2.04129 26.2019 1.6986 27.2008 1.6986C28.1997 1.6986 29.0412 2.04129 29.7254 2.72669L32.2733 5.27459C32.9587 5.95998 33.3014 6.80213 33.3014 7.80102C33.3014 8.79992 32.9587 9.64146 32.2733 10.3257L29.7254 12.8736ZM1.3857 33.6143V26.0153L9.43167 17.9693L0 8.44828L8.44828 0L17.9247 9.52107L22.1264 5.27459L29.7254 12.8736L25.5236 17.0754L34.9553 26.5964L26.5517 35L17.0307 25.5236L8.98468 33.6143H1.3857ZM11.9796 15.4215L15.3768 12.0243L13.2312 9.87867L11.0856 11.9796L8.58238 9.47637L10.6833 7.33078L8.40358 5.09579L5.05109 8.49298L11.9796 15.4215ZM26.507 29.9489L29.9042 26.5517L27.6245 24.3167L25.5236 26.4176L22.9757 23.9144L25.1213 21.7688L22.931 19.6232L19.5338 23.0204L26.507 29.9489ZM4.96169 30.0383H7.46488L24.6743 12.8736L22.1264 10.3257L4.96169 27.5351V30.0383Z" fill="white"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Desain</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-pengembangan-1 to-pengembangan-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M7.5 2.5V7.5H2.5V2.5H7.5ZM0 0V10H10V0H0ZM20 6.25V11.25H15V6.25H20ZM12.5 3.75V13.75H22.5V3.75H12.5ZM7.5 17.5V22.5H2.5V17.5H7.5ZM0 15V25H10V15H0Z" fill="white"/>
                        <path d="M25 10V17.5H17.5V25H10V35H35V10H25ZM20 20H25V25H20V20ZM17.5 32.5H12.5V27.5H17.5V32.5ZM25 32.5H20V27.5H25V32.5ZM32.5 32.5H27.5V27.5H32.5V32.5ZM32.5 25H27.5V20H32.5V25ZM27.5 17.5V12.5H32.5V17.5H27.5Z" fill="white"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Pengembangan</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-pemasaran-1 to-pemasaran-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="35" viewBox="0 0 47 35" fill="none">
                        <path d="M40.8126 0.574185C40.3203 0.255652 39.7572 0.0629455 39.1729 0.013006C38.5886 -0.0369335 38.001 0.057423 37.4617 0.287781L19.7905 7.24741C19.3722 7.41768 18.9248 7.50521 18.4731 7.50517H7.16011C6.21062 7.50517 5.30002 7.88236 4.62863 8.55375C3.95724 9.22514 3.58006 10.1357 3.58006 11.0852V11.3716H0V19.9638H3.58006V20.3361C3.60249 21.2706 3.98955 22.1593 4.65853 22.8122C5.3275 23.4651 6.22532 23.8305 7.16011 23.8302L11.4562 32.9379C11.7471 33.5512 12.2051 34.07 12.7775 34.4348C13.35 34.7996 14.0138 34.9955 14.6925 35H16.4969C17.4414 34.9924 18.3447 34.6119 19.0099 33.9414C19.6751 33.2708 20.0483 32.3645 20.0483 31.4199V24.1739L37.4617 31.1335C37.89 31.304 38.3468 31.3915 38.8078 31.3913C39.523 31.3798 40.2194 31.1609 40.8126 30.7612C41.2837 30.4432 41.6723 30.0175 41.9462 29.5195C42.2201 29.0214 42.3715 28.4653 42.3879 27.8972V3.52415C42.3852 2.94136 42.2404 2.36803 41.9659 1.85394C41.6913 1.33985 41.2955 0.900544 40.8126 0.574185ZM16.4683 11.0852V20.3361H7.16011V11.0852H16.4683ZM16.4683 31.4199H14.6639L11.1411 23.8302H16.4683V31.4199ZM21.108 20.7657C20.768 20.5919 20.4134 20.4482 20.0483 20.3361V10.8847C20.4099 10.8101 20.7644 10.7047 21.108 10.5697L38.8078 3.52415V27.8112L21.108 20.7657ZM42.4738 12.0876V19.2478C43.4233 19.2478 44.3339 18.8706 45.0053 18.1992C45.6767 17.5278 46.0538 16.6172 46.0538 15.6677C46.0538 14.7182 45.6767 13.8076 45.0053 13.1362C44.3339 12.4648 43.4233 12.0876 42.4738 12.0876Z" fill="white"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Perangkat Lunak</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-bisnis-1 to-bisnis-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="35" viewBox="0 0 55 35" fill="none">
                        <path d="M20 27.5H35C35.7083 27.5 36.3025 27.26 36.7825 26.78C37.2625 26.3 37.5017 25.7067 37.5 25V15C37.5 14.2917 37.26 13.6975 36.78 13.2175C36.3 12.7375 35.7067 12.4983 35 12.5H32.5V10C32.5 9.29167 32.26 8.6975 31.78 8.2175C31.3 7.7375 30.7067 7.49833 30 7.5H25C24.2917 7.5 23.6975 7.74 23.2175 8.22C22.7375 8.7 22.4983 9.29333 22.5 10V12.5H20C19.2917 12.5 18.6975 12.74 18.2175 13.22C17.7375 13.7 17.4983 14.2933 17.5 15V25C17.5 25.7083 17.74 26.3025 18.22 26.7825C18.7 27.2625 19.2933 27.5017 20 27.5ZM25 12.5V10H30V12.5H25ZM17.5 35C12.625 35 8.48917 33.3017 5.0925 29.905C1.69583 26.5083 -0.00166544 22.3733 1.22609e-06 17.5C1.22609e-06 12.625 1.69833 8.48917 5.095 5.0925C8.49167 1.69583 12.6267 -0.00166544 17.5 1.22609e-06H37.5C42.375 1.22609e-06 46.5108 1.69833 49.9075 5.095C53.3042 8.49167 55.0017 12.6267 55 17.5C55 22.375 53.3017 26.5108 49.905 29.9075C46.5083 33.3042 42.3733 35.0017 37.5 35H17.5ZM17.5 30H37.5C40.9583 30 43.9067 28.7808 46.345 26.3425C48.7833 23.9042 50.0017 20.9567 50 17.5C50 14.0417 48.7808 11.0933 46.3425 8.655C43.9042 6.21667 40.9567 4.99833 37.5 5H17.5C14.0417 5 11.0933 6.21917 8.655 8.6575C6.21667 11.0958 4.99833 14.0433 5 17.5C5 20.9583 6.21917 23.9067 8.6575 26.345C11.0958 28.7833 14.0433 30.0017 17.5 30Z" fill="white"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Bisnis</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-kuliner-1 to-kuliner-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M6.10465 21.7065H7.32558C7.32546 21.469 7.25609 21.2368 7.12598 21.0381C6.99587 20.8395 6.81066 20.6831 6.59302 20.5881L6.10465 21.7065ZM28.8953 21.7065L28.407 20.5881C28.1893 20.6831 28.0041 20.8395 27.874 21.0381C27.7439 21.2368 27.6745 21.469 27.6744 21.7065H28.8953ZM23.6046 9.36046C23.6046 9.68427 23.7333 9.99482 23.9622 10.2238C24.1912 10.4528 24.5018 10.5814 24.8256 10.5814C25.1494 10.5814 25.4599 10.4528 25.6889 10.2238C25.9179 9.99482 26.0465 9.68427 26.0465 9.36046H23.6046ZM8.95349 9.36046C8.95349 9.68427 9.08212 9.99482 9.31109 10.2238C9.54006 10.4528 9.85061 10.5814 10.1744 10.5814C10.4982 10.5814 10.8088 10.4528 11.0377 10.2238C11.2667 9.99482 11.3953 9.68427 11.3953 9.36046H8.95349ZM20.7558 32.5581C20.432 32.5581 20.1215 32.6868 19.8925 32.9157C19.6635 33.1447 19.5349 33.4553 19.5349 33.7791C19.5349 34.1029 19.6635 34.4134 19.8925 34.6424C20.1215 34.8714 20.432 35 20.7558 35V32.5581ZM14.2442 35C14.568 35 14.8785 34.8714 15.1075 34.6424C15.3365 34.4134 15.4651 34.1029 15.4651 33.7791C15.4651 33.4553 15.3365 33.1447 15.1075 32.9157C14.8785 32.6868 14.568 32.5581 14.2442 32.5581V35ZM9.36046 4.88372C6.87791 4.88372 4.49704 5.86991 2.74162 7.62534C0.986189 9.38076 2.08063e-08 11.7616 2.08063e-08 14.2442H2.44186C2.44186 12.4093 3.17078 10.6495 4.46827 9.35199C5.76576 8.0545 7.52554 7.32558 9.36046 7.32558V4.88372ZM25.6395 7.32558C27.4745 7.32558 29.2342 8.0545 30.5317 9.35199C31.8292 10.6495 32.5581 12.4093 32.5581 14.2442H35C35 11.7616 34.0138 9.38076 32.2584 7.62534C30.503 5.86991 28.1221 4.88372 25.6395 4.88372V7.32558ZM12.6163 32.5581C11.047 32.5581 9.99209 32.5549 9.20581 32.4491C8.45535 32.3481 8.13302 32.1739 7.92139 31.9607L6.19581 33.6895C6.93651 34.4302 7.85953 34.7314 8.88186 34.8698C9.86837 35.0033 11.1153 35 12.6163 35V32.5581ZM4.88372 27.2674C4.88372 28.7684 4.88046 30.0153 5.01395 31.0019C5.1507 32.0242 5.45349 32.9472 6.19418 33.6879L7.92139 31.9623C7.70977 31.7507 7.53558 31.4284 7.43302 30.6763C7.32884 29.8916 7.32558 28.8367 7.32558 27.2674H4.88372ZM27.6744 27.2674C27.6744 28.8367 27.6712 29.8916 27.5653 30.6779C27.4644 31.4284 27.2902 31.7507 27.077 31.9623L28.8058 33.6879C29.5465 32.9472 29.8477 32.0242 29.986 31.0019C30.1195 30.0153 30.1163 28.7684 30.1163 27.2674H27.6744ZM22.3837 35C23.8846 35 25.1316 35.0033 26.1181 34.8698C27.1405 34.733 28.0651 34.4302 28.8058 33.6879L27.0786 31.9623C26.867 32.174 26.5446 32.3481 25.7926 32.4507C25.0079 32.5549 23.953 32.5581 22.3837 32.5581V35ZM9.36046 7.32558C9.70884 7.32558 10.0491 7.35163 10.3828 7.40046L10.7393 4.98465C10.2828 4.91731 9.82193 4.88358 9.36046 4.88372V7.32558ZM17.5 0C15.7138 1.84649e-06 13.9725 0.559425 12.5205 1.59972C11.0685 2.64001 9.97884 4.10894 9.40442 5.80023L11.716 6.58488C12.1265 5.37666 12.9051 4.32735 13.9425 3.58428C14.9799 2.84122 16.2239 2.44171 17.5 2.44186V0ZM9.40442 5.80023C9.10492 6.68484 8.95259 7.61258 8.95349 8.54651H11.3953C11.3953 7.85791 11.5093 7.1986 11.7177 6.58488L9.40442 5.80023ZM25.6395 4.88372C25.1723 4.88372 24.7116 4.91791 24.2607 4.98465L24.6188 7.40046C24.9568 7.35057 25.2979 7.32554 25.6395 7.32558V4.88372ZM17.5 2.44186C18.7758 2.44205 20.0195 2.84171 21.0565 3.58476C22.0936 4.3278 22.8719 5.37693 23.2823 6.58488L25.5939 5.80023C25.0196 4.1092 23.9302 2.64046 22.4785 1.60019C21.0269 0.559922 19.2859 0.0003419 17.5 0V2.44186ZM23.2823 6.58488C23.4907 7.1986 23.6046 7.85791 23.6046 8.54651H26.0465C26.0465 7.58767 25.887 6.66465 25.5939 5.80023L23.284 6.58488H23.2823ZM7.32558 27.2674V21.7065H4.88372V27.2674H7.32558ZM6.59302 20.5881C5.35887 20.0493 4.30876 19.1621 3.5714 18.0352C2.83405 16.9083 2.44149 15.5908 2.44186 14.2442H2.08063e-08C-0.000121396 16.0658 0.531161 17.8478 1.52874 19.3719C2.52632 20.8961 3.94686 22.0961 5.61628 22.8249L6.59302 20.5881ZM27.6744 21.7065V27.2674H30.1163V21.7065H27.6744ZM32.5581 14.2442C32.5585 15.5908 32.1659 16.9083 31.4286 18.0352C30.6912 19.1621 29.6411 20.0493 28.407 20.5881L29.3837 22.8249C31.0531 22.0961 32.4737 20.8961 33.4713 19.3719C34.4688 17.8478 35.0001 16.0658 35 14.2442H32.5581ZM23.6046 8.54651V9.36046H26.0465V8.54651H23.6046ZM8.95349 8.54651V9.36046H11.3953V8.54651H8.95349ZM22.3837 32.5581H20.7558V35H22.3837V32.5581ZM14.2442 32.5581H12.6163V35H14.2442V32.5581Z" fill="white"/>
                        <path d="M6.10449 27.2676H19.1277H6.10449ZM28.8952 27.2676H25.6394H28.8952Z" fill="white"/>
                        <path d="M6.10449 27.2676H19.1277M28.8952 27.2676H25.6394" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Kuliner</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
            <a class="w-[13%] h-[150px] hover:shadow-xl" href="">
                <div class="flex flex-col justify-between w-full h-full p-5 rounded bg-gradient-to-tl from-musik-1 to-musik-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M34.3856 0.421948C34.1948 0.258255 33.971 0.137577 33.7295 0.0681251C33.4879 -0.00132655 33.2342 -0.0179211 32.9856 0.019471L10.2369 3.51927C9.82265 3.58213 9.44469 3.79154 9.17173 4.10945C8.89878 4.42736 8.74896 4.83266 8.74951 5.25168V23.3632C7.93189 22.9638 7.03458 22.7544 6.12466 22.7507C4.91331 22.7507 3.72918 23.1099 2.72198 23.7829C1.71479 24.4559 0.929775 25.4124 0.466214 26.5315C0.00265371 27.6507 -0.118635 28.8821 0.117686 30.0702C0.354007 31.2583 0.937324 32.3496 1.79387 33.2061C2.65042 34.0627 3.74173 34.646 4.9298 34.8823C6.11786 35.1186 7.34933 34.9973 8.46846 34.5338C9.58759 34.0702 10.5441 33.2852 11.2171 32.278C11.8901 31.2708 12.2493 30.0867 12.2493 28.8753V15.5061L31.4982 12.5488V19.8634C30.6806 19.464 29.7833 19.2546 28.8734 19.2509C27.662 19.2509 26.4779 19.6101 25.4707 20.2831C24.4635 20.9561 23.6785 21.9126 23.2149 23.0317C22.7514 24.1509 22.6301 25.3823 22.8664 26.5704C23.1027 27.7585 23.686 28.8498 24.5426 29.7063C25.3991 30.5629 26.4904 31.1462 27.6785 31.3825C28.8666 31.6188 30.098 31.4975 31.2172 31.034C32.3363 30.5704 33.2929 29.7854 33.9658 28.7782C34.6388 27.771 34.998 26.5869 34.998 25.3755V1.75187C34.998 1.49912 34.9433 1.24936 34.8376 1.01977C34.7318 0.790193 34.5776 0.58624 34.3856 0.421948ZM6.12466 31.5002C5.60551 31.5002 5.09802 31.3462 4.66637 31.0578C4.23471 30.7694 3.89828 30.3595 3.69961 29.8798C3.50094 29.4002 3.44896 28.8724 3.55024 28.3633C3.65152 27.8541 3.90151 27.3864 4.26861 27.0193C4.6357 26.6522 5.1034 26.4022 5.61257 26.3009C6.12175 26.1996 6.64952 26.2516 7.12914 26.4503C7.60877 26.649 8.01872 26.9854 8.30714 27.4171C8.59556 27.8487 8.74951 28.3562 8.74951 28.8753C8.74951 29.5715 8.47296 30.2391 7.98071 30.7314C7.48845 31.2236 6.82081 31.5002 6.12466 31.5002ZM28.8734 28.0004C28.3542 28.0004 27.8467 27.8464 27.4151 27.558C26.9834 27.2696 26.647 26.8597 26.4483 26.38C26.2497 25.9004 26.1977 25.3726 26.299 24.8635C26.4002 24.3543 26.6502 23.8866 27.0173 23.5195C27.3844 23.1524 27.8521 22.9024 28.3613 22.8011C28.8705 22.6998 29.3982 22.7518 29.8779 22.9505C30.3575 23.1492 30.7674 23.4856 31.0559 23.9173C31.3443 24.3489 31.4982 24.8564 31.4982 25.3755C31.4982 26.0717 31.2217 26.7393 30.7294 27.2316C30.2372 27.7238 29.5695 28.0004 28.8734 28.0004ZM31.4982 8.99646L12.2493 11.9538V6.70409L31.4982 3.79926V8.99646Z" fill="white"/>
                    </svg>
                    <div>
                        <h1 class="mb-2 text-name text-white font-medium">Musik</h1>
                        <hr class="w-full h-[2px] border-none text-white bg-white">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="px-[5%] py-10 w-full text-center" style="background: linear-gradient(57deg, #DDE3F9 28.49%, rgba(221, 227, 249, 0.00) 77.5%);">
        <h1 class="text-left text-title text-black font-semibold">💸 Harga Diskon</h1>
        <div class="my-5 flex gap-[2.7%] overflow-x-auto">
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
        </div>
        <a class="btn-secondary" href="">Lihat Semua</a>
    </div>

    <div class="px-[5%] py-10 w-full text-center bg-gradient-to-t from-llightblue via-whiteblue to-white">
        <h1 class="text-left text-title text-black font-semibold">🔥 Bootcamp Populer</h1>
        <div class="my-5 flex gap-[2.7%] overflow-x-auto">
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
            <div class="w-[23%] h-fit bg-white rounded text-left">
                <img class="w-full" src="{{ Storage::url('home/machine-learning.png') }}" alt="course image">
                <div class="m-5">
                    <div class="flex justify-between items-center">
                        <img class="w-14" src="{{ Storage::url('home/google-logo.png') }}" alt="">
                        <p class="text-black text-subname font-medium">4.5 ⭐️ <span class="font-light text-[10px]">(8.2k ulasan)</span></p>
                    </div>
                    <h1 class="mt-2 text-black text-name font-medium">Machine Learning</h1>
                    <p class="text-black text-subname font-light line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget </p>
                    <h2 class="my-2 text-black text-subheading font-medium">Rp250.000,00</h2>
                    <p class="text-black text-light font-light line-clamp-2">Beginner • 6 bulan</p>
                </div>
            </div>
        </div>
        <a class="btn-secondary" href="">Lihat Semua</a>

        <div class="my-10">
            <h1 class="text-left text-title text-black font-semibold my-4">Dipercaya oleh Mitra Luar Biasa</h1>
            <img class="w-4/5" src="{{ Storage::url('home/companies.png') }}" alt="companies image">
        </div>
    </div>
@endsection
