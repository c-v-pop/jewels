<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-800">
    <header class="lg:grid grid-cols-3 items-center gap-2 py-10 lg:grid-cols-3 flex flex-col main_header">
        <div class="text-center text-primary hover:text-support duration-300 mx-auto px-3 py-2 rounded-md">
            <a
            href="{{ url('/') }}"
            class="rounded-md px-3 py-2 text-primary hover:bg-support text-center  outline-dotted duration-300 lg:text-2xl">
            Home
            </a>
        </div>
        <div class="text-center text-primary hover:text-white duration-300 mx-auto px-3 py-2 rounded-md">
            <h1 class="lg:text-4xl">Agnes' Timeless Treasures</h1>
        </div>
        @if (Route::has('login'))
            <nav class="flex flex-1 lg:justify-end mx-auto gap-6">
                @auth
                <a
                    href="{{ url('/create-product') }}"
                    class="rounded-md px-3 py-2 text-primary hover:bg-support text-center  outline-dotted duration-300 text-md lg:text-2xl">
                    Create Product
                    </a>
                    <a
                        href="{{ url('/cart') }}"
                        class="rounded-md px-3 py-2 text-primary hover:bg-support text-center  outline-dotted duration-300 lg:text-2xl"
                    >
                        Cart
                    </a>
                    @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-primary hover:bg-support text-center  outline-dotted duration-300 mx-6"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-primary hover:bg-support text-center  outline-dotted duration-300"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif

    </header>
    <div class="container flex mx-auto">
        {{ $slot }}  <!-- This is where the dynamic content will be injected -->
    </div>
</body>
</html>
