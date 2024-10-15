<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-800">
    <header class="grid grid-cols-3 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="text-center text-primary hover:text-support duration-300 mx-auto px-3 py-2 rounded-md">
            <i class="fa-regular fa-gem fa-4x text-primary hover:text-support duration-300"></i>
        </div>
        <div class="text-center text-primary hover:text-white duration-300 mx-auto px-3 py-2 rounded-md">
            <h1 class="text-4xl">Agnes' Timeless Treasures</h1>
        </div>
        @if (Route::has('login'))
            <nav class="flex flex-1 justify-end mx-auto">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-dotted duration-300 text-2xl"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-dotted duration-300 mx-6"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-dotted duration-300"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif

    </header>
    <section id="about-us" class="about-section text-secondary">    
        <article class="mt-16">
            <div class="flex flex-col mx-auto w-fit">
            <div class="flex flex-row-reverse items-center gap-12 mx-4 mb-14">
                <p class="text-3xl leading-loose">
                    Welcome to Agnes' Timeless Treasures, your trusted destination for exquisite second-hand jewellery, and new treasures.<br> With a passion for quality and a love for craftsmanship, we offer a curated selection of beautiful, pre-loved items that tell a story.<br> Whether you're looking for a vintage piece to add to your collection or an elegant accessory to complement your style, we have something unique for everyone.
                </p>
                    <img src="{{ asset('/images/green_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="w-1/3 h-[40rem] rounded-3xl">
            </div>
            <div class="flex items-center gap-12 mx-4">
                <p class="text-3xl leading-loose">
                    At Agnes' Timeless Treasures, we believe in giving jewellery a second life.<br> Every item in our store is carefully inspected to ensure authenticity and quality, providing you with the opportunity to own timeless pieces at affordable prices.<br> Our collection is constantly updated, so you never know what hidden gem you'll discover next.
                </p>
                    <img src="{{ asset('/images/teal_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="w-1/3 h-[40rem] rounded-3xl">
            </div>
            <div class="flex flex-row-reverse items-center gap-12 mx-4 mt-10 text-center">
                <p class="text-3xl leading-loose">
                    Browse our selection online or visit us in-store to find something truly special. <br> Thank you for choosing Agnes' Timeless Treasures where every piece has a story, and every customer is treated like family.
                </p>
                    <img src="{{ asset('/images/unique_hoop_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="w-1/3 h-[40rem] rounded-3xl">
            </div>
            <a href="{{ route('products') }}" class="hover:bg-support text-center text-primary outline-dotted duration-300 lg:w-1/3 mx-auto w-full my-20 py-4 rounded-md text-2xl">Discover our selection online</a>          
        </div>
    </article>
</section>
      </div>
    </div>
  </div>

  
</body>
</html>