<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - JEFDemy</title>
    @vite('resources/css/app.css')

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="main.css">
</head>

<body>
    <nav class="fixed top-0 left-0 w-screen shadow-sm bg-lightblue z-50">
        <div class="w-[90%] mx-auto py-4 flex flex-col md:flex-row md:items-center justify-between">
            <div class="flex items-center justify-between my-1 gap-5">
                <a href="{{ url('/') }}">
                    <img class="xl:block hidden w-[177px]" src="{{ Storage::url('general/logo.png') }}" alt="logo">
                    <img class="xl:hidden block w-[130px]" src="{{ Storage::url('general/logo.png') }}" alt="logo">
                </a>

                {{-- Button Kategori dropdown --}}

                <div class="buttonDrop-Container relative group md:block hidden">
                    <button id="dropdown-Title"
                        class="group text-black hover:bg-whiteblue font-normal rounded-lg text-subheading px-3 py-1.5 text-center inline-flex items-center my-2"
                        type="button">Kategori<svg class="w-3 h-3 ml-2.5" aria-hidden="true" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div
                        class="subnav absolute top-full left-0 hidden opacity-0 group-hover:opacity-100 group-hover:block bg-white rounded-lg shadow w-60">
                        <ul class="py-2 text-subname text-gray-800" aria-labelledby="dropdown-Title">
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Desain</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Pengembangan --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Pengembagan</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- TI dan Perangkat Lunak --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">TI dan Perangkat Lunak</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Pengembangan Diri --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Pengembangan Diri</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Bisnis --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Bisnis</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Kuliner --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Kuliner</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Musik --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Musik</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                            {{-- Pemasaran --}}
                            <a href="#">
                                <li class="navDrop-item flex items-center justify-between hover:text-darkdarkblue">
                                    <div class="left-content inline-flex items-center">
                                        <div class="markerDrop"></div>
                                        <div class="block px-2 py-2 hover:font-medium">Pemasaran</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                {{-- menu untuk mobile --}}
                <button class="md:hidden burger-icon" id="mobileMenuButton">
                    <img class="h-6" src="{{ Storage::url('icon/hamburger.svg') }}" alt="burger">
                </button>
            </div>
            <div class="md:flex items-center gap-5" id="navLinks">
                {{-- Button Bisnis Saya --}}
                <div class="nav-item flex flex-col items-center">
                    <a href="{{ url('/') }}"
                        class="text-subheading md:block hidden text-black font-normal w-28 text-center hover:font-medium">Bisnis
                        Saya</a>
                    <div class="marker"></div>
                </div>
                {{-- Button Instruktur --}}
                <div class="nav-item flex flex-col items-center">
                    <a href="{{ url('/') }}"
                        class="text-subheading md:block hidden text-black font-normal w-24 text-center hover:font-medium">Instruktur</a>
                    <div class="marker"></div>
                </div>
                {{-- Button Bootcamp Saya --}}
                <div class="nav-item flex flex-col items-center">
                    <a href="{{ url('/') }}"
                        class="text-subheading md:block hidden text-black font-normal w-40 text-center hover:font-medium">Bootcamp
                        Saya</a>
                    <div class="marker"></div>
                </div>
                <a href="{{ url('/') }}"
                    class="md:flex hidden items-center justify-center h-10 w-10 rounded-full hover:bg-whiteblue hover:shadow-sm transition ease-linear">
                    <img class="h-6" src="{{ Storage::url('icon/cart.svg') }}" alt="logo">
                </a>
                <a href="{{ url('/') }}"
                    class="md:flex hidden items-center justify-center h-10 w-10 rounded-full hover:bg-whiteblue hover:shadow-sm transition ease-linear">
                    <img class="h-6" src="{{ Storage::url('icon/notification.svg') }}" alt="logo">
                </a>
                <a href="{{ url('/') }}"
                    class="w-fit h-fit rounded-3xl md:flex hidden items-center hover:bg-whiteblue hover:shadow-sm transition ease-linear">
                    <img class="h-10 w-10 rounded-full" src="{{ Storage::url('profile/profile-1.jpeg') }}"
                        alt="profile picture">
                    <p class="text-subheading text-black font-normal px-4">Anne</p>
                </a>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
