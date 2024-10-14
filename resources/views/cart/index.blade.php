<!-- resources/views/cart/index.blade.php -->
<x-layout>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold">Your Cart</h2>

        @if(session('cart'))
            <div class="mt-6">
                @foreach(session('cart') as $id => $details)
                    <div class="flex items-center justify-between border-b py-6">
                        <img src="{{ $details['image_url'] }}" alt="{{ $details['name'] }}" class="h-16 w-16 object-cover">
                        <div class="ml-4">
                            <h3>{{ $details['name'] }}</h3>
                            <p>Quantity: {{ $details['quantity'] }}</p>
                            <p>Price: ${{ $details['price'] }}</p>
                        </div>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-red-500">Remove</button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="mt-4">Your cart is empty.</p>
        @endif
    </div>
</x-layout>
