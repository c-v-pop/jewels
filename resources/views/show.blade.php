<!-- resources/views/products/show.blade.php -->

<x-layout> <!-- This refers to the layout component -->
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Product Image Section -->
            <div>
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ $product->image_url }}" alt="{{ $product->description }}" class="h-full w-full object-cover object-center">
                </div>
            </div>
            
            <!-- Product Details Section -->
            <div>
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
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-support focus:outline-none focus:ring-2 focus:ring-primary">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
