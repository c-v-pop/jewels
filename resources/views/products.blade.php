<x-layout>  <!-- This refers to the layout component -->
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach($products as $product)
        <a href="{{ route('products.show', $product->id) }}" class="group hover:outline-dashed hover:outline-primary">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="{{ $product->image_url }}" alt="{{ $product->description }}" class="h-full w-full object-cover object-center group-hover:opacity-60">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">${{ $product->price }}</p>
        </a>
        @endforeach
    </div>
    
    @if($products->isEmpty())
    <p class="mt-8 text-center text-gray-600">No products available at the moment.</p>
    @endif
</div>
</x-layout>
