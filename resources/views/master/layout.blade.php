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
</head>
<body>
    <nav class="fixed top-0 left-0 w-screen shadow-sm bg-lightblue z-50">
        <div class="w-[90%] mx-auto py-4 flex items-center justify-between">
            <div class="w-fit flex items-center gap-6">
                <a href="{{ url('/') }}"><img width="177" height="60" src="{{ Storage::url('general/logo.png') }}" alt="logo"></a>
                <a href="{{ url('/') }}" class="text-subheading text-black font-light">Kategori</a>
            </div>
            <div class="w-fit flex items-center gap-6">
                <a href="{{ url('/') }}" class="text-subheading text-black font-light transition-all duration-150 hover:font-medium hover:border-b hover:border-black">Bisnis Saya</a>
                <a href="{{ url('/') }}" class="text-subheading text-black font-light transition-all duration-150 hover:font-medium hover:border-b hover:border-black">Instruktur</a>
                <a href="{{ url('/') }}" class="text-subheading text-black font-light transition-all duration-150 hover:font-medium hover:border-b hover:border-black">Bootcamp Saya</a>
                <a href="{{ url('/') }}" class="flex items-center justify-center h-10 w-10 rounded-full transition-all duration-150 hover:bg-llightblue hover:shadow-sm"><img class="h-6" src="{{ Storage::url('icon/cart.png') }}" alt="logo"></a>
                <a href="{{ url('/') }}" class="flex items-center justify-center h-10 w-10 rounded-full transition-all duration-150 hover:bg-llightblue hover:shadow-sm"><img class="h-6" src="{{ Storage::url('icon/notification.png') }}" alt="logo"></a>
                <a href="{{ url('/') }}" class="w-fit h-fit rounded-3xl flex items-center transition-all duration-150 hover:bg-llightblue hover:shadow-sm">
                    <img class="h-10 w-10 rounded-full" src="{{ Storage::url('profile/profile-1.jpeg') }}" alt="profile picture">
                    <p class="text-subheading text-black font-light px-4">Anne</p>
                </a>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>