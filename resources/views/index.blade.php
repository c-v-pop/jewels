<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
    <title>Agnes' Timeless Treasures</title>
    @vite('resources/css/app.css')
    
</head>
<body class="bg-gray-800">
@include('layouts.header')
<!-- About Section -->
<section id="about-us" class="about-section text-secondary max-w-[1048px] mx-auto">    
    <article class="mt-16">
        <div class="flex flex-col mx-auto w-fit">
            <div class="flex lg:flex-row-reverse flex-col items-center gap-12 mx-4 mb-14">
                <p class="text-xl leading-loose">
                    Welcome to Agnes' Timeless Treasures, your trusted destination for exquisite second-hand jewelry, and new treasures.<br> With a passion for quality and a love for craftsmanship, we offer a curated selection of beautiful, pre-loved items that tell a story.<br> Whether you're looking for a vintage piece to add to your collection or an elegant accessory to complement your style, we have something unique for everyone.
                </p>
                <img src="{{ asset('/images/green_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="lg:h-[25rem] rounded-3xl">
            </div>
            <div class="flex items-center gap-12 mx-4 lg:flex-row flex-col">
                <p class="text-xl leading-loose">
                    At Agnes' Timeless Treasures, we believe in giving jewelry a second life.<br> Every item in our store is carefully inspected to ensure authenticity and quality, providing you with the opportunity to own timeless pieces at affordable prices.<br> Our collection is constantly updated, so you never know what hidden gem you'll discover next.
                </p>
                <img src="{{ asset('/images/teal_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="lg:h-[25rem] rounded-3xl">
            </div>
            <div class="flex lg:flex-row-reverse flex-col items-center gap-12 mx-4 mt-10 lg:text-start">
                <p class="text-xl leading-loose">
                    Browse our selection online or visit us in-store to find something exceptional. <br> Thank you for choosing Agnes' Timeless Treasures where every piece has a story, and every customer is treated like family.
                </p>
                <img src="{{ asset('/images/unique_hoop_pearl_necklace.jpg') }}" alt="Crystals Necklace" class="lg:h-[25rem] rounded-3xl">
            </div>
            <a href="{{ route('products') }}" 
               class="hover:text-tertiary hover:outline-dotted text-center pb-2 text-transparent bg-gradient-to-br from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text outline-solid duration-300 lg:w-1/3 mx-auto p-2 my-20 lg:py-4 rounded-md text-2xl">
               Discover our selection online
            </a>          
        </div>
    </article>
</section>
</div>
</div>
</div>
<footer class="bg-transparent flex flex-col justify-center m-auto text-center my-6 pb-2">
    <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Agnes' Timeless Treasures. All rights reserved.</p>
  </footer>

</body>
</html>
