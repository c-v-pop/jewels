<x-layout>
    <div class="max-w-2xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Add New Product</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="mb-4">
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
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <!-- Product Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>

            <!-- Product Price -->
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" class="w-full border border-gray-300 rounded-md p-2" required step="0.01">
            </div>

            <!-- Product Weight -->
            <div class="mb-4">
                <label for="weight" class="block text-gray-700">Weight (grams)</label>
                <input type="number" name="weight" id="weight" class="w-full border border-gray-300 rounded-md p-2" required step="0.01">
            </div>

            <!-- Product Image Upload -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Product Image</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
        </form>
    </div>
</x-layout>
