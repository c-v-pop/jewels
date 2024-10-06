<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-main-bg">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2 h-20">
            <img src="images/gemstone.png" alt="gemstone">
        </div>
        @if (Route::has('login'))
            <nav class="flex flex-1 justify-end mr-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-support font-bold dark:focus-visible:ring-white text-2xl duration-200"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-support font-bold dark:focus-visible:ring-white text-2xl duration-200"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
<div>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.thbaker.co.uk/pub/media/catalog/product/cache/559903688dc9fe82c7c6365725123978/0/1/01-03-47r_grey_1.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-60">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">White Gold Ring</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$98</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.thbaker.co.uk/pub/media/catalog/product/cache/559903688dc9fe82c7c6365725123978/0/1/01-22-522_1_1.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-60">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">White Gold Bracelet</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$135</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.thbaker.co.uk/pub/media/catalog/product/cache/559903688dc9fe82c7c6365725123978/4/1/41-12-475_01.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-60">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Diamond Ring Gold</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$189</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.thbaker.co.uk/pub/media/catalog/product/cache/559903688dc9fe82c7c6365725123978/0/1/01-21-925.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-60">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Necklace</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$135</p>
        </a>
  
        <!-- More products... -->
      </div>
    </div>
  </div>
  
</body>
</html>