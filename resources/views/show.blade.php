<!-- resources/views/products/show.blade.php -->

<x-layout> <!-- This refers to the layout component -->
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 text-center">
        <a href="{{ url('/products') }}" id="scroll-down" class="duration-300 fixed bottom-8 right-4 text-3xl mr-6 animate-bounce hover:animate-none hidden lg:block"> 
            <i class="fa-solid fa-gift text-secondary hover:text-tertiary fa-2xl duration-200"> All Products</i>
        </a>
        <div class="rounded-2xl">           
            <!-- Product Details Section -->
            <div class="rounded-2xl  p-6">

                <h1 class="text-2xl font-bold text-secondary mt-4">{{ $product->name }}</h1>
                <p class="mt-4 text-lg text-secondary">{{ $product->description }}</p>
                <p class="mt-4 text-xl font-medium text-secondary">£{{ $product->price }}</p>

                <!-- Display All Images (Featured and Additional) -->
                <div class="flex gap-4">
                    @foreach($product->images as $image)
                        <img src="{{ asset('storage/' . $image->image_url) }}" alt="{{ $product->name }}"
                             class="h-48 w-full object-cover rounded-md duration-200 hover:scale-300 hover:z-50 hover:cursor-zoom-in ease-in my-4">
                    @endforeach
                </div>
                
                <!-- Additional Product Information -->
                @if($product->weight)
                    <p class="mt-2 text-sm text-secondary">Weight: {{ $product->weight }}g</p>
                @endif
                
                <!-- Add to Cart Button -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center outline-solid duration-300">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
