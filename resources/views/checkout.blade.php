<h1>Checkout</h1>
<ul>
    @foreach($cartItems as $item)
        <li>{{ $item['name'] }} - £{{ $item['price'] }}</li>
    @endforeach
</ul>
<p>Total: £{{ session('cart_total') }}</p>

<form action="{{ route('checkout.process') }}" method="POST">
    @csrf
    <button type="submit">Pay with PayPal </button>
</form>