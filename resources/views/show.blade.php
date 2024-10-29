<!-- resources/views/products/show.blade.php -->

<x-layout> <!-- This refers to the layout component -->
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 text-center">
        <div class="rounded-2xl">           
            <!-- Product Details Section -->
            <div>
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->description }}" class="w-full max-h-64 object-cover object-center hover:scale-105 duration-200 rounded-t-2xl">
                <h1 class="text-2xl font-bold text-gray-900">{{ $product->name }}</h1>
                <p class="mt-4 text-lg text-gray-600">{{ $product->description }}</p>
                <p class="mt-4 text-xl font-medium text-gray-900">${{ $product->price }}</p>
                
                <!-- Additional Product Information (if available) -->
                @if($product->weight)
                    <p class="mt-2 text-sm text-gray-500">Weight: {{ $product->weight }}g</p>
                @endif
                
                <!-- Add to Cart Button -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-dotted duration-300">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
