<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="dark:bg-gray-800">
    <header class="grid grid-cols-3 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="text-center text-secondary">
            <h1>Agnes' Timeless Treasures</h1>
        </div>
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
                    <a
                        href="{{ url('/products') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:focus-visible:ring-white"
                    >
                        Products
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
    <section id="about-us" class="about-section">    
        <article>
            <p>
                <strong>Welcome to Agnes' Timeless Treasures</strong>, your trusted destination for exquisite second-hand jewellery, wallets, handbags, and new treasures. With a passion for quality and a love for craftsmanship, we offer a curated selection of beautiful, pre-loved items that tell a story. Whether you're looking for a vintage piece to add to your collection or an elegant accessory to complement your style, we have something unique for everyone.
            </p>
            <p>
                At Agnes' Timeless Treasures, we believe in giving jewellery a second life. Every item in our store is carefully inspected to ensure authenticity and quality, providing you with the opportunity to own timeless pieces at affordable prices. Our collection is constantly updated, so you never know what hidden gem you'll discover next.
            </p>
            <p>
                Browse our selection online or visit us in-store to find something truly special. Thank you for choosing <strong>Agnes' Timeless Treasures</strong>—where every piece has a story, and every customer is treated like family.
            </p>
        </article>
    </section>
    
      </div>
    </div>
  </div>
  
  
</body>
</html>