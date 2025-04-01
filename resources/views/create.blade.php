<x-layout>
    <div class="max-w-2xl mx-auto py-8 bg-gray-700 rounded-xl px-4 text-center mt-6 ">
        <a href="{{ url('/products') }}" id="scroll-down" class="duration-300 fixed bottom-8 right-4 text-3xl mr-6 animate-bounce hover:animate-none hidden lg:block"> 
            <i class="fa-solid fa-gift text-secondary hover:text-tertiary fa-2xl duration-200"> All Products</i>
        </a>
        <h1 class="rounded-md px-3 py-2 text-primary text-center text-2xl mb-4">Add New Product</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form for uploading a new product -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name -->
            <div class="mb-6">
                <label for="name" class="block text-primary">Product Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <!-- Product Description -->
            <div class="mb-6">
                <label for="description" class="block text-primary">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>

            <!-- Product Price -->
            <div class="mb-6">
                <label for="price" class="block text-primary">Price</label>
                <input type="number" name="price" id="price" class="w-full border border-gray-300 rounded-md p-2" required step="0.01">
            </div>

            <!-- Product Weight -->
            <div class="mb-6">
                <label for="weight" class="block text-primary">Weight (grams)</label>
                <input type="number" name="weight" id="weight" class="w-full border border-gray-300 rounded-md p-2" required step="0.01">
            </div> 
            
            <!-- Product Image Upload -->
            <div class="mb-6">
                <label for="featured_image" class="block text-primary">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" class="w-full border border-gray-300 rounded-md p-2 text-primary" required>
            </div>
            <div class="mb-6">
                <label for="additional_images" class="block text-primary">Additional Image</label>
                <input type="file" name="additional_images[]" id="additional_images" class="w-full border border-gray-300 rounded-md p-2 text-primary" required multiple>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="rounded-md px-3 py-2 text-primary hover:bg-support hover:text-white text-center  outline-dotted duration-300">Create Product</button>
        </form>
    </div>
</x-layout>
