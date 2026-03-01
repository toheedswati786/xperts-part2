@extends('layouts.app')

@section('title', 'Your Cart - MK\'S')

@section('content')
<main class="flex-1 px-6 lg:px-20 py-8 lg:py-12">
    <div class="max-w-6xl mx-auto">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-sm font-medium">
            <a class="text-slate-500 hover:text-primary" href="{{ route('home') }}">Home</a>
            <span class="material-symbols-outlined text-slate-400">chevron_right</span>
            <span class="text-slate-900 font-medium">Shopping Cart</span>
        </nav>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <h1 class="text-3xl font-bold text-slate-900 mb-8">Your Shopping Cart</h1>
                
                <!-- Cart Item 1 -->
                <div data-cart-item class="flex flex-col sm:flex-row gap-6 bg-white p-6 rounded-xl border border-slate-200 shadow-sm transition-all hover:shadow-md mb-6">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-32 shrink-0" 
                         style="background-image: url('https://placehold.co/400x400/cccccc/969696?text=Product+1');"></div>
                    <div class="flex flex-1 flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-slate-900 text-lg font-bold uppercase tracking-tight">Premium Leather Tote</h3>
                                <p class="text-slate-500 text-sm mt-1">Color: Tan | Size: One Size</p>
                            </div>
                            <button data-delete-item data-item-id="1" class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                        <div class="flex items-center justify-between mt-4 sm:mt-0">
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-1 border border-slate-200">
                                <button data-quantity-minus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">-</button>
                                <span data-quantity-display class="text-slate-900 font-semibold w-6 text-center">1</span>
                                <button data-quantity-plus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">+</button>
                            </div>
                            <p data-item-price class="text-slate-900 text-xl font-bold tracking-tight">$120.00</p>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 2 -->
                <div data-cart-item class="flex flex-col sm:flex-row gap-6 bg-white p-6 rounded-xl border border-slate-200 shadow-sm transition-all hover:shadow-md mb-6">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-32 shrink-0" 
                         style="background-image: url('https://placehold.co/400x400/cccccc/969696?text=Product+2');"></div>
                    <div class="flex flex-1 flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-slate-900 text-lg font-bold uppercase tracking-tight">Wireless Headphones</h3>
                                <p class="text-slate-500 text-sm mt-1">Color: Midnight Black</p>
                            </div>
                            <button data-delete-item data-item-id="2" class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                        <div class="flex items-center justify-between mt-4 sm:mt-0">
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-1 border border-slate-200">
                                <button data-quantity-minus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">-</button>
                                <span data-quantity-display class="text-slate-900 font-semibold w-6 text-center">1</span>
                                <button data-quantity-plus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">+</button>
                            </div>
                            <p data-item-price class="text-slate-900 text-xl font-bold tracking-tight">$299.00</p>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 3 -->
                <div data-cart-item class="flex flex-col sm:flex-row gap-6 bg-white p-6 rounded-xl border border-slate-200 shadow-sm transition-all hover:shadow-md mb-6">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-32 shrink-0" 
                         style="background-image: url('https://placehold.co/400x400/cccccc/969696?text=Product+3');"></div>
                    <div class="flex flex-1 flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-slate-900 text-lg font-bold uppercase tracking-tight">Minimalist Smart Watch</h3>
                                <p class="text-slate-500 text-sm mt-1">Color: Cloud White | Size: 44mm</p>
                            </div>
                            <button data-delete-item data-item-id="3" class="text-slate-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                        <div class="flex items-center justify-between mt-4 sm:mt-0">
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-1 border border-slate-200">
                                <button data-quantity-minus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">-</button>
                                <span data-quantity-display class="text-slate-900 font-semibold w-6 text-center">1</span>
                                <button data-quantity-plus class="flex h-8 w-8 items-center justify-center rounded-md hover:bg-white text-slate-600 transition-all">+</button>
                            </div>
                            <p data-item-price class="text-slate-900 text-xl font-bold tracking-tight">$199.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-xl border border-slate-200 sticky top-24">
                    <h2 class="text-xl font-bold text-slate-900 mb-6">Order Summary</h2>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-slate-600">Subtotal (3 items)</span>
                            <span data-cart-subtotal class="font-semibold">$618.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Shipping</span>
                            <span class="font-semibold">$15.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Tax</span>
                            <span class="font-semibold">$49.44</span>
                        </div>
                        <div class="border-t border-slate-200 pt-4">
                            <div class="flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <span data-cart-total class="text-primary">$682.44</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-lg transition-all mb-4">
                        Proceed to Checkout
                    </button>
                    
                    <div class="text-center text-sm text-slate-500">
                        <p>Secure checkout with 256-bit encryption</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    // Initialize cart functionality when page loads
    document.addEventListener('DOMContentLoaded', function() {
        initCartDelete();
        initQuantityButtons();
    });
</script>
@endsection