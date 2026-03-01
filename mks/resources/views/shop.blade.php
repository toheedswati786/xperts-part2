@extends('layouts.app')

@section('title', 'Shop - MK\'S')

@section('content')
<section class="py-12 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-sm font-medium">
            <a class="text-slate-500 hover:text-primary" href="{{ route('home') }}">Home</a>
            <span class="material-symbols-outlined text-slate-400">chevron_right</span>
            <span class="text-slate-900 font-medium">Shop</span>
        </nav>
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-slate-900 mb-4">Our Products</h1>
            <p class="text-slate-600 max-w-2xl mx-auto">Discover our carefully curated collection of premium products</p>
        </div>
        
        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($products ?? [] as $product)
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden relative">
                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all">
                        <span class="material-symbols-outlined text-primary">favorite_border</span>
                    </button>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $product->name }}</h3>
                <p class="text-slate-600 text-sm mb-4">{{ Str::limit($product->description, 50) }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-primary">{{ $product->formatted_price }}</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded-lg transition-all text-sm">
                        Add to Cart
                    </button>
                </div>
            </div>
            @empty
            <!-- Fallback products if database is empty -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden relative">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product+1" alt="Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all">
                        <span class="material-symbols-outlined text-primary">favorite_border</span>
                    </button>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Premium Headphones</h3>
                <p class="text-slate-600 text-sm mb-4">Wireless noise-cancelling technology</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-primary">$299.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded-lg transition-all text-sm">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden relative">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product+2" alt="Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all">
                        <span class="material-symbols-outlined text-primary">favorite_border</span>
                    </button>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Smart Watch</h3>
                <p class="text-slate-600 text-sm mb-4">Fitness tracking and notifications</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-primary">$199.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded-lg transition-all text-sm">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden relative">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product+3" alt="Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all">
                        <span class="material-symbols-outlined text-primary">favorite_border</span>
                    </button>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Leather Tote</h3>
                <p class="text-slate-600 text-sm mb-4">Premium leather with spacious design</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-primary">$120.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded-lg transition-all text-sm">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden relative">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product+4" alt="Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all">
                        <span class="material-symbols-outlined text-primary">favorite_border</span>
                    </button>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Sunglasses</h3>
                <p class="text-slate-600 text-sm mb-4">UV protection with stylish design</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-primary">$89.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded-lg transition-all text-sm">
                        Add to Cart
                    </button>
                </div>
            </div>
            @endforelse
        </div>
        
        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-slate-900 hover:bg-primary text-white hover:text-slate-900 font-bold py-3 px-8 rounded-lg transition-all">
                Load More Products
            </button>
        </div>
    </div>
</section>
@endsection