<!-- resources/views/cart/index.blade.php -->
<x-layout>
    <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 lg:px-8  rounded-2xl text-center mb-6 text-primary mt-12">
        <h2 class="text-2xl font-bold">Your Cart</h2>
        <a href="{{ url('/products') }}" id="scroll-down" class="duration-300 fixed bottom-8 right-4 text-3xl mr-6 animate-bounce hover:animate-none hidden lg:block"> 
            <i class="fa-solid fa-gift text-secondary hover:text-tertiary fa-2xl duration-200"> All Products</i>
        </a>
        @if(session('cart'))
            <div class="my-8">
                @foreach(session('cart') as $id => $details)
                    <div class="flex items-center justify-between gap-6 border-b flex-shrink">
                        <img src="{{ $details['image_url'] }}" alt="{{ $details['name'] }}" class="h-16 w-16">
                        <div class="ml-4">
                            <h3>{{ $details['name'] }}</h3>
                            <p>Quantity: {{ $details['quantity'] }}</p>
                            <p>Price: ${{ $details['price'] }}</p>
                        </div>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="rounded-md px-3 py-2 text-red-200 hover:bg-red-600 hover:text-white text-center  outline-solid duration-300">Remove</button>
                        </form>
                    </div>
                    @endforeach
                </div>
        @else
            <p class="mt-4">Your cart is empty.</p>
        @endif
        <a href={{ url('/checkout') }} class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center outline-solid duration-300">Checkout</a>
    </div>
</x-layout>
