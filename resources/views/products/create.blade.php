
@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 border-b pb-4">➕ Add New Product</h2>

    <form method="POST" action="{{ route('products.store') }}" class="bg-white p-6 rounded-xl shadow-lg space-y-6">
        @csrf
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Product Name</label>
            <input type="text" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-indigo-500" required />
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Description</label>
            <textarea name="description" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-indigo-500" rows="3"></textarea>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Price (₹)</label>
            <input type="number" name="price" step="0.01" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-indigo-500" required />
        </div>
        <div class="flex justify-between">
            <a href="{{ route('products.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg">🔙 Cancel</a>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg font-semibold">💾 Save Product</button>
        </div>
    </form>
</div>
@endsection
