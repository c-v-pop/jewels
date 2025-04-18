<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between">
                    {{ __("You're logged in!") }}

                    @auth
                        @if(auth()->user()->is_admin)
                            <div>
                                <a
                                    href="{{ url('/create-product') }}"
                                    class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center outline-solid duration-300 text-2xl">
                                    Create Product
                                </a>
                            </div>
                        @endif
                    @endauth
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
