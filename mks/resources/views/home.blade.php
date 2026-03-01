@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 to-slate-800 text-white py-20 lg:py-32">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full -mr-20 -mt-20 blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-primary rounded-full -ml-20 -mb-20 blur-3xl opacity-20"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-black mb-6 tracking-tight">
                Everything You Need,<br />All in One Place
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-10 max-w-3xl mx-auto leading-relaxed">
                Discover premium products, unbeatable prices, and exceptional service at MK's - your ultimate shopping destination.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('shop') }}" class="bg-primary hover:bg-primary/90 text-slate-900 font-bold py-4 px-8 rounded-lg transition-all text-lg">
                    Shop Now
                </a>
                <a href="{{ route('shop') }}" class="border-2 border-white hover:bg-white hover:text-slate-900 text-white font-bold py-4 px-8 rounded-lg transition-all text-lg">
                    View shop
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Categories -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Shop by Category</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Discover our curated collections designed for every lifestyle and need.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <a href="{{ route('shop') }}" class="group block">
                <div class="bg-slate-100 rounded-2xl p-8 text-center transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl text-slate-900">shopping_bag</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Fashion</h3>
                    <p class="text-slate-600">Trendy clothing and accessories</p>
                </div>
            </a>
            <a href="{{ route('shop') }}" class="group block">
                <div class="bg-slate-100 rounded-2xl p-8 text-center transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl text-slate-900">devices</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Electronics</h3>
                    <p class="text-slate-600">Latest gadgets and tech</p>
                </div>
            </a>
            <a href="{{ route('shop') }}" class="group block">
                <div class="bg-slate-100 rounded-2xl p-8 text-center transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl text-slate-900">home</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Home & Living</h3>
                    <p class="text-slate-600">Comfort and style for your space</p>
                </div>
            </a>
            <a href="{{ route('shop') }}" class="group block">
                <div class="bg-slate-100 rounded-2xl p-8 text-center transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl text-slate-900">fitness_center</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Sports & Fitness</h3>
                    <p class="text-slate-600">Gear for your active lifestyle</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Featured Products</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Handpicked items that our customers love</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts ?? [] as $product)
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden">
                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $product->name }}</h3>
                <p class="text-slate-600 mb-4">{{ Str::limit($product->description, 60) }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-primary">{{ $product->formatted_price }}</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-6 rounded-lg transition-all">
                        Add to Cart
                    </button>
                </div>
            </div>
            @endforeach
            
            @if(empty($featuredProducts))
            <!-- Fallback products if database is empty -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product" alt="Featured Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Premium Wireless Headphones</h3>
                <p class="text-slate-600 mb-4">Noise-cancelling technology with premium sound quality</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-primary">$299.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-6 rounded-lg transition-all">
                        Add to Cart
                    </button>
                </div>
            </div>
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product" alt="Featured Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Smart Fitness Watch</h3>
                <p class="text-slate-600 mb-4">Track your health and stay connected</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-primary">$199.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-6 rounded-lg transition-all">
                        Add to Cart
                    </button>
                </div>
            </div>
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all">
                <div class="aspect-square bg-slate-200 rounded-xl mb-6 overflow-hidden">
                    <img src="https://placehold.co/400x400/cccccc/969696?text=Product" alt="Featured Product" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Designer Leather Tote</h3>
                <p class="text-slate-600 mb-4">Elegant and spacious for everyday use</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-primary">$120.00</span>
                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-6 rounded-lg transition-all">
                        Add to Cart
                    </button>
                </div>
            </div>
            @endif
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-primary text-white hover:text-slate-900 font-bold py-3 px-8 rounded-lg transition-all">
                <span>View All Products</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-slate-900 text-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose MK's?</h2>
            <p class="text-slate-300 max-w-2xl mx-auto">We're committed to providing the best shopping experience</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl text-slate-900">local_shipping</span>
                </div>
                <h3 class="text-xl font-bold mb-4">Free Shipping</h3>
                <p class="text-slate-300">On orders over $50 with fast delivery options</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl text-slate-900">verified</span>
                </div>
                <h3 class="text-xl font-bold mb-4">Quality Guaranteed</h3>
                <p class="text-slate-300">Premium products with satisfaction guarantee</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-primary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl text-slate-900">support_agent</span>
                </div>
                <h3 class="text-xl font-bold mb-4">24/7 Support</h3>
                <p class="text-slate-300">Dedicated customer service team ready to help</p>
            </div>
        </div>
    </div>
</section>
@endsection