<!-- resources/views/cart/index.blade.php -->
<x-layout>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8 bg-gray-700 rounded-2xl text-center mb-6 text-primary">
        <h2 class="text-2xl font-bold">Your Cart</h2>

        @if(session('cart'))
            <div class="mt-6">
                <a href="{{ url('/products') }}" id="scroll-down" class="duration-300 fixed bottom-8 right-4 text-3xl mr-6 animate-bounce hover:animate-none"> 
                    <i class="fa-solid fa-gift text-secondary hover:text-tertiary fa-2xl duration-200"> All Products</i>
                </a>
                @foreach(session('cart') as $id => $details)
                    <div class="flex flex-col items-center gap-6 border-b py-6">
                        <img src="{{ $details['image_url'] }}" alt="{{ $details['name'] }}" class="h-96 w-96 object-cover">
                        <div class="ml-4">
                            <h3>{{ $details['name'] }}</h3>
                            <p>Quantity: {{ $details['quantity'] }}</p>
                            <p>Price: ${{ $details['price'] }}</p>
                        </div>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="rounded-md px-3 py-2 text-red-200 hover:bg-red-600 hover:text-white text-center  outline-dotted duration-300">Remove</button>
                            
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="mt-4">Your cart is empty.</p>
        @endif
    </div>
</x-layout>
