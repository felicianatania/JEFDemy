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

<body class="relative">
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
                <a href="{{ url('/cart') }}"
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

    <div class="mt-24 bg-whiteblue">
        @yield('content')
    </div>

    <footer class="bottom-0 w-full bg-maincolor dark:bg-maincolor">
        <div class="w-[90%] mx-auto p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ url('/home') }}" class="flex items-center">
                        <img src="{{ Storage::url('general/logo.png') }}" class="h-16 mr-3" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="text-heading font-semibold mt-8">About Us</div>
            <div class="flex flex-row">
                <div class="mb-6 md:mb-0">
                    <p class="mt-4 mb-6 font-thin max-w-[60%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis pellentesque egestas. Vivamus venenatis eros non odio accumsan, eget ornare arcu finibus. Donec aliquam nisl vel justo malesuada, eu sollicitudin tellus varius. Quisque est turpis, bibendum a risus luctus, mollis pellentesque turpis. In rutrum, lorem vitae aliquam sollicitudin, odio lacus feugiat erat,</p>
                </div>

                <div class="flex flex-col text-right">
                    <div class="text-subheading text-blackgray mb-2">811 2588 1465</div>
                    <div class="text-subheading text-blackgray mb-6">JEFdemy@gmail.com</div>
                    <div class="sm:flex sm:items-center sm:justify-end">
                        <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                            <a href="#" class="text-black hover:text-black dark:hover:text-white">
                                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white">
                                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 20">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white">
                                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948.591.621.928 1.509 1.005 2.644.328.138.63.299.905.484 1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.217 6.217 0 0 0-1.528-.161Z"/>                                </svg>
                                <span class="sr-only">Dribbble account</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white">
                                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
