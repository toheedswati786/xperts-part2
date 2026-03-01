<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title text="Checkout | MK's">Checkout | OneStop</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#C5A059",
                        "charcoal": "#1A1A1A",
                        "background-light": "#f8f8f8",
                        "background-dark": "#0F0F0F",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }</script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 px-4 md:px-10 py-3">
<div class="max-w-7xl mx-auto flex items-center justify-between">
<div class="flex items-center gap-4">
<img alt="MK's Logo" class="h-12 w-auto" src=""/>
<h1 class="text-2xl font-black tracking-tighter text-charcoal dark:text-white text-charcoal dark:text-slate-100">MK'S</h1>
</div>
<div class="hidden md:flex items-center gap-2 text-sm font-medium text-slate-500">
<span class="text-primary">Cart</span>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-slate-900 dark:text-slate-100">Checkout</span>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span>Confirmation</span>
</div>
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors relative">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 right-1 size-4 bg-primary text-[10px] text-white rounded-full flex items-center justify-center">3</span>
</button>
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden border-2 border-white dark:border-slate-800">
<img class="w-full h-full object-cover" data-alt="User profile avatar photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA421sKKOUjq9D9QFv-V07AyIDINTZRxvXIqb7JO0Ca4cVzXIx8Mxq-CEt8rjH21Dt6opQeOsj67rP5F5Rte4e9rWYsnCgAXIIXjv0SBJ5HAYuyvOqWWOw752M_J-wi5o5i1LlsUpmW-MVEWfbMzbTgKof-X15MNj67TZaa5qYs7EUOlGfnn84tInq2bged0gzNp2zsEE0wa-RzpzgQnQfn9Ov1fY1_HhNXkUlBmE3lr69mMOPYv7_8Ronrp3ZRdbnqGW1FsWQ2cQij"/>
</div>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-4 py-8 lg:py-12">
<div class="flex flex-col lg:flex-row gap-12">
<!-- Left Side: Checkout Forms -->
<div class="flex-1 space-y-10">
<div>
<h2 class="text-3xl font-extrabold tracking-tight mb-2 text-charcoal dark:text-slate-100">Checkout</h2>
<p class="text-slate-500">Please enter your details to complete your order.</p>
</div>
<!-- Section: Shipping Address -->
<section class="space-y-6">
<div class="flex items-center gap-2 border-b border-slate-200 dark:border-slate-800 pb-4">
<span class="material-symbols-outlined text-primary">location_on</span>
<h3 class="text-xl font-bold text-charcoal dark:text-slate-100">Shipping Address</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">First Name</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="e.g. John" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Last Name</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="e.g. Doe" type="text"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Address Line 1</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="Street address or P.O. Box" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">City</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="e.g. San Francisco" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Postal Code</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="e.g. 94103" type="text"/>
</div>
</div>
</section>
<!-- Section: Shipping Method -->
<section class="space-y-6">
<div class="flex items-center gap-2 border-b border-slate-200 dark:border-slate-800 pb-4">
<span class="material-symbols-outlined text-primary">local_shipping</span>
<h3 class="text-xl font-bold text-charcoal dark:text-slate-100">Shipping Method</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="relative flex items-center justify-between p-4 rounded-xl border-2 border-primary bg-primary/5 cursor-pointer">
<div class="flex items-center gap-3">
<input checked="" class="text-primary focus:ring-primary" name="shipping" type="radio"/>
<div>
<p class="font-bold text-charcoal dark:text-slate-100">Standard Delivery</p>
<p class="text-sm text-slate-500">3-5 business days</p>
</div>
</div>
<span class="font-bold text-charcoal dark:text-slate-100">Free</span>
</label>
<label class="relative flex items-center justify-between p-4 rounded-xl border-2 border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors cursor-pointer">
<div class="flex items-center gap-3">
<input class="text-primary focus:ring-primary" name="shipping" type="radio"/>
<div>
<p class="font-bold text-charcoal dark:text-slate-100">Express Shipping</p>
<p class="text-sm text-slate-500">1-2 business days</p>
</div>
</div>
<span class="font-bold text-charcoal dark:text-slate-100">$14.99</span>
</label>
</div>
</section>
<!-- Section: Payment Information -->
<section class="space-y-6">
<div class="flex items-center gap-2 border-b border-slate-200 dark:border-slate-800 pb-4">
<span class="material-symbols-outlined text-primary">payments</span>
<h3 class="text-xl font-bold text-charcoal dark:text-slate-100">Payment Information</h3>
</div>
<div class="bg-slate-50 dark:bg-slate-900/50 p-6 rounded-2xl space-y-6">
<div class="flex gap-4">
<button class="flex-1 py-3 px-4 rounded-lg bg-white dark:bg-slate-800 border-2 border-primary flex items-center justify-center gap-2 font-bold shadow-sm text-charcoal dark:text-slate-100">
<span class="material-symbols-outlined">credit_card</span>
                                Credit Card
                            </button>
<button class="flex-1 py-3 px-4 rounded-lg bg-slate-200 dark:bg-slate-700 border-2 border-transparent flex items-center justify-center gap-2 font-bold text-slate-600 dark:text-slate-300 text-charcoal dark:text-slate-100">
<span class="material-symbols-outlined">account_balance_wallet</span>
                                PayPal
                            </button>
</div>
<div class="space-y-4">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Cardholder Name</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="John Doe" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Card Number</label>
<div class="relative">
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary pl-12" placeholder="0000 0000 0000 0000" type="text"/>
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">credit_card</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Expiry Date</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="MM/YY" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">CVV</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-primary focus:border-primary" placeholder="123" type="text"/>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Right Side: Order Summary -->
<div class="lg:w-96">
<div class="sticky top-28 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-xl overflow-hidden">
<div class="p-6 border-b border-slate-200 dark:border-slate-800">
<h3 class="text-xl font-bold text-charcoal dark:text-slate-100">Order Summary</h3>
</div>
<div class="p-6 space-y-4">
<!-- Product Item -->
<div class="flex gap-4">
<div class="size-20 rounded-lg bg-slate-100 dark:bg-slate-800 overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Red athletic running shoes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa0r_zcP2C6CKgivyztWhBArJA0TPbxCQZqZghvoyTvQRiIHaQeyKcnEo7IpR5VyG57bRRq0S_JuVuUlNao7oTDXwvld8Fih_F0HtKBNLYe-M2_wSTZQ60Ky0cFiq90ta50Ig65f_Bh87mJN6lhdb5vMh5J2DH4xJ3vkGIYhG6fub0DMlxztmhfIL-_YBRT6QsRz_rnX8oMEBWHY-_91IRemA4QxQx7JkOy2rFDCzefXn1w4yPDQ_f0yIOt2vwSYBeU9FCmWOdWB6a"/>
</div>
<div class="flex-1 min-w-0">
<p class="font-bold truncate text-charcoal dark:text-slate-100">Aero Dash Pro X</p>
<p class="text-sm text-slate-500">Size: 42 | Color: Red</p>
<p class="font-bold text-primary mt-1 text-charcoal dark:text-slate-100">$120.00</p>
</div>
</div>
<div class="flex gap-4">
<div class="size-20 rounded-lg bg-slate-100 dark:bg-slate-800 overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Modern minimalist wrist watch" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBg51GxyO7eY0uQ2EQPaxS3OiXhLycYnHtcKZWzXdASOT-GamOevE4mCx2QrIelMWHII7B1ikiXw5qcfWfYvYev1BNiHUoED2Kts0hc2RcBhssSIKWe1H4tJsvfVTocfVBPlBMtMMYHadeedZQufn2F_bz6FeqHVtnEt9f3Dbkp4tJnFp1J_r70o76abwu7G1R4EvDBqylhB5bTuoxE6bhVR5_i5ZRXAU-z48Im9uA5zZqmYNHtmR9D1I22Yzei6afwA9jktbOTC9Ra"/>
</div>
<div class="flex-1 min-w-0">
<p class="font-bold truncate text-charcoal dark:text-slate-100">Horizon Smart Watch</p>
<p class="text-sm text-slate-500">Space Gray</p>
<p class="font-bold text-primary mt-1 text-charcoal dark:text-slate-100">$199.00</p>
</div>
</div>
</div>
<div class="p-6 bg-slate-50 dark:bg-slate-800/50 space-y-3">
<div class="flex justify-between text-slate-600 dark:text-slate-400">
<span>Subtotal</span>
<span>$319.00</span>
</div>
<div class="flex justify-between text-slate-600 dark:text-slate-400">
<span>Shipping</span>
<span class="text-emerald-500 font-medium">Free</span>
</div>
<div class="flex justify-between text-slate-600 dark:text-slate-400">
<span>Estimated Tax</span>
<span>$25.52</span>
</div>
<div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center">
<span class="text-lg font-bold text-charcoal dark:text-slate-100">Total</span>
<span class="text-2xl font-black text-primary text-charcoal dark:text-slate-100">$344.52</span>
</div>
</div>
<div class="p-6">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2 mb-4 text-charcoal dark:text-slate-100">
                            Place Order
                            <span class="material-symbols-outlined">lock</span>
</button>
<p class="text-xs text-center text-slate-400 flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-[14px]">verified_user</span>
                            Secure encrypted checkout
                        </p>
</div>
</div>
</div>
</div>
</main>
<footer class="max-w-7xl mx-auto px-4 py-12 border-t border-slate-200 dark:border-slate-800 text-center"><div class="flex justify-center mb-6"><img alt="MK's Logo" class="h-16 w-auto" src=""/></div>
<div class="flex flex-wrap justify-center gap-8 mb-6 text-slate-400">
<span class="material-symbols-outlined text-4xl">payments</span>
<span class="material-symbols-outlined text-4xl">credit_card</span>
<span class="material-symbols-outlined text-4xl">security</span>
</div>
<p class="text-slate-500 text-sm">© 2024 MK's E-commerce Inc. All rights reserved.</p>
<div class="mt-4 flex justify-center gap-4 text-xs font-medium text-slate-400">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
<a class="hover:text-primary" href="#">Help Center</a>
</div>
</footer>
</body></html>