<header class="lg:grid grid-cols-3 items-center gap-2 py-10 lg:grid-cols-3 flex flex-col bg-black/15">
    <div class="text-center text-primary hover:text-support duration-300 mx-auto px-3 py-2 rounded-md">
        <i class="fa-regular fa-gem fa-4x text-primary hover:text-support duration-300"></i>
    </div>
    <div class="text-center text-primary hover:text-white duration-300 mx-auto px-3 py-2 rounded-md">
        <h1 class="pb-2 text-4xl text-transparent bg-gradient-to-br from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Agnes' Timeless Treasures</h1>
    </div>
    <!-- Login Logic -->
    @if (Route::has('login'))
    <nav class="flex flex-1 justify-end mx-auto gap-6">
        @auth
        <a
        href="{{ url('/dashboard') }}"
        class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-solid duration-300 text-2xl"
        >
        Dashboard
        </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a :href="route('logout')"
                onclick="event.preventDefault(); 
                this.closest('form').submit();"
                class="rounded-md px-3 py-2 hover:bg-support text-primary text-center  outline-solid duration-300 text-2xl block hover:cursor-pointer">
            {{ __('Log Out') }}
        </a>
    </form>
    @else
    <a
    href="{{ route('login') }}"
    class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-solid duration-300 mx-6">
    Log in
    </a>

@if (Route::has('register'))
    <a
    href="{{ route('register') }}"
    class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-solid duration-300">
    Register
    </a>
@endif
@endauth
</nav>
@endif
</header>