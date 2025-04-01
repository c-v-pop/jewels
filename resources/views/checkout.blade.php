<x-layout>
    <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 lg:px-8  rounded-2xl text-center mb-6 text-primary mt-12">
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
                    <button type="submit" class="rounded-md px-3 py-2 text-red-200 hover:bg-red-600 hover:text-white text-center outline-dotted duration-300">Remove</button>
                </form>
            </div>
        @endforeach

        @php
            $total = array_reduce(session('cart', []), function ($carry, $item) {
                return $carry + ($item['price'] * $item['quantity']);
            }, 0);
        @endphp

        <!-- Dynamic PayPal Link -->
        <a href="https://paypal.me/cvpopdev?country.x=GB&locale.x=en_GB&amount={{ $total }}" 
           class="rounded-md px-3 py-2 text-primary hover:bg-support hover:cursor-pointer text-center outline-dotted duration-300 mt-6 w-full inline-block">
            Pay £{{ number_format($total, 2) }} with PayPal
        </a>
    </div>
</x-layout>
