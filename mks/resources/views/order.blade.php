<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d4af37", /* Premium Gold */
                        "background-light": "#fcfcfc",
                        "background-dark": "#101722",
                        "charcoal": "#1a1a1a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-charcoal dark:text-slate-100">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Header Section -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-4 md:px-10 py-4 bg-white dark:bg-charcoal">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<img alt="MK's Luxury E-commerce Logo" class="h-10 w-auto" data-alt="MK's luxury brand logo in gold" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_2b1w_m8rgJkLipIFmY6NcZLGGuAnoox3_AdmSqx_XTsPpjiKoRUK0N0zW_3xmihD92z57m6ugEVPABbbY3RU20q9URC7NN40RbhwtNKyacCF6Ffm0tHLRQ4iTZQKvnsAxYS3LeHo1EyNtCtzQ-8qkzsKere8Gr2z9EU77qEYinEPBL6b-aMySV8sTcd3UQDvDUxFShoWWbHougyHjr0tFz3E38fX8e0bnTUpya-P0mXW_4MY2anNGgvyH5cNENI2OffuiwQlncX-"/>
<h2 class="text-charcoal dark:text-primary text-xl font-black leading-tight tracking-[-0.015em]">MK'S</h2>
</div>
<nav class="hidden md:flex items-center gap-9">
<a class="text-charcoal dark:text-slate-200 text-sm font-semibold hover:text-primary transition-colors" href="#">Shop</a>
<a class="text-charcoal dark:text-slate-200 text-sm font-semibold hover:text-primary transition-colors" href="#">Collections</a>
<a class="text-charcoal dark:text-slate-200 text-sm font-semibold hover:text-primary transition-colors" href="#">Account</a>
</nav>
</div>
<div class="flex flex-1 justify-end gap-4 items-center">
<label class="hidden lg:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800">
<div class="text-slate-500 flex items-center justify-center pl-3">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-transparent focus:ring-0 text-sm placeholder:text-slate-400" placeholder="Search orders..." value=""/>
</div>
</label>
<button class="flex items-center justify-center rounded-full h-10 w-10 bg-slate-100 dark:bg-slate-800 text-charcoal dark:text-white">
<span class="material-symbols-outlined">shopping_bag</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-10 w-10 border-2 border-primary/20" data-alt="User profile avatar silhouette" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC25o0olTv6S1WFAxgdvPYeCJaS5qYZyiHV9hICoVsx_4ZpIx3s2tttuIOvWDhbqEj1_5jLqd8CKtS39YWnCPIDwoM1mlfU9GgLYE6tVxz1Vmv7gAfWvaVnJ4w41NKj9WMJVWt27Z4JXXFKH2f6MnrLDGH18p7o0g8gzeuGS9kXVgWacCom6r49cmorGwF8oK13J00s9i7bgukgo97XhG0zLlj0_58_sTGKWZPqb7mh-HlSVw-Alvx_gZ9aYl-7a969zf7yuKQ96zQa");'></div>
</div>
</header>
<main class="flex flex-1 justify-center py-10 px-4 md:px-0">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1">
<!-- Order Title & Action -->
<div class="flex flex-wrap justify-between items-end gap-4 p-4 mb-6">
<div class="flex flex-col gap-2">
<div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/10 text-primary border border-primary/20 tracking-wider uppercase">In Transit</div>
<h1 class="text-charcoal dark:text-white text-4xl font-black leading-tight tracking-tight">Order #OS-88291</h1>
<p class="text-slate-500 dark:text-slate-400 text-base">Placed on October 12, 2023 • 2 Items</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-5 py-2.5 bg-white dark:bg-charcoal border border-slate-200 dark:border-slate-700 rounded-lg text-charcoal dark:text-white text-sm font-bold shadow-sm hover:bg-slate-50">
<span class="material-symbols-outlined text-lg">download</span>
<span>Invoice</span>
</button>
<button class="px-5 py-2.5 bg-primary text-charcoal text-sm font-bold rounded-lg shadow-md hover:opacity-90 transition-opacity">
                                Track Live
                            </button>
</div>
</div>
<!-- Status Timeline -->
<div class="bg-white dark:bg-charcoal rounded-xl border border-slate-100 dark:border-slate-800 p-8 mb-8 shadow-sm">
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
<!-- Timeline Progress Bar (Background) -->
<div class="hidden md:block absolute top-[22px] left-[12%] right-[12%] h-[2px] bg-slate-100 dark:bg-slate-700 -z-0"></div>
<div class="hidden md:block absolute top-[22px] left-[12%] w-[50%] h-[2px] bg-primary -z-0"></div>
<!-- Step 1: Order Placed -->
<div class="flex md:flex-col items-center gap-4 md:text-center relative z-10">
<div class="w-11 h-11 rounded-full bg-primary flex items-center justify-center text-charcoal shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-xl">check_circle</span>
</div>
<div>
<p class="text-charcoal dark:text-white font-bold text-sm">Order Placed</p>
<p class="text-slate-400 text-xs">Oct 12, 10:30 AM</p>
</div>
</div>
<!-- Step 2: Processing -->
<div class="flex md:flex-col items-center gap-4 md:text-center relative z-10">
<div class="w-11 h-11 rounded-full bg-primary flex items-center justify-center text-charcoal shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-xl">verified</span>
</div>
<div>
<p class="text-charcoal dark:text-white font-bold text-sm">Processing</p>
<p class="text-slate-400 text-xs">Oct 13, 02:15 PM</p>
</div>
</div>
<!-- Step 3: Shipped -->
<div class="flex md:flex-col items-center gap-4 md:text-center relative z-10">
<div class="w-11 h-11 rounded-full bg-primary flex items-center justify-center text-charcoal shadow-lg shadow-primary/20 border-4 border-white dark:border-charcoal">
<span class="material-symbols-outlined text-xl">local_shipping</span>
</div>
<div>
<p class="text-charcoal dark:text-white font-bold text-sm">Shipped</p>
<p class="text-slate-400 text-xs">Oct 14, 09:00 AM</p>
</div>
</div>
<!-- Step 4: Delivered -->
<div class="flex md:flex-col items-center gap-4 md:text-center relative z-10 opacity-40">
<div class="w-11 h-11 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400">
<span class="material-symbols-outlined text-xl">package_2</span>
</div>
<div>
<p class="text-charcoal dark:text-white font-bold text-sm">Delivered</p>
<p class="text-slate-400 text-xs">Exp. Oct 17</p>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 px-4 md:px-0">
<!-- Order Items -->
<div class="lg:col-span-2 space-y-6">
<h2 class="text-xl font-bold text-charcoal dark:text-white">Order Items</h2>
<div class="bg-white dark:bg-charcoal rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden shadow-sm">
<!-- Item 1 -->
<div class="flex gap-4 p-4 border-b border-slate-100 dark:border-slate-800 last:border-0 items-center">
<div class="w-24 h-24 bg-slate-50 dark:bg-slate-900 rounded-lg flex-shrink-0 bg-cover bg-center" data-alt="Luxury timepiece photography" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBMyz5yLzATIsQA2WGjoPGPx-ybvSRHZjpMn-42lbRyeIqwKI6X7_zU_LnkThmdjw1L6cbX-E-0npPh0NI-pbhMJNPBOeYI-KJ924P7SGEIFSQBUnidV1nmL4KzFzt9V2OW19Xl_Qs555aJErux1Zj4u2RuXKj8ZQgOEsQyZIQptCpqwZXafQpKFry0IoKstuZfD8Ml7XnAGqLh9tXRukSK6SRZ4bOJbRGBC672jVGHGHa-c6ljHITRKhqEk3r_eazesP__KEnIecay');"></div>
<div class="flex-1">
<h3 class="font-bold text-charcoal dark:text-white text-base">MK Signature Gold Watch</h3>
<p class="text-slate-400 text-sm">Edition: Limited Rose Gold</p>
<p class="text-primary font-bold mt-2">$1,250.00</p>
</div>
<div class="text-right">
<span class="text-slate-400 text-sm">Qty: 1</span>
</div>
</div>
<!-- Item 2 -->
<div class="flex gap-4 p-4 border-b border-slate-100 dark:border-slate-800 last:border-0 items-center">
<div class="w-24 h-24 bg-slate-50 dark:bg-slate-900 rounded-lg flex-shrink-0 bg-cover bg-center" data-alt="Premium leather wallet photography" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBEfoZlIX3fd2-4TPWaMnXVwStdF6bForP-crkruAy8FXCNNFy4o_Urnwxg6hIiZlUQr0-akjm7LrYPZLewebJBV3AgclU-GCiulAWdXKgrLwnUnwQg3IZm-zygM56gFOdcotZEdNJW1-zpQxqP3jclHqZMjQfj3mlcqy6bk7Xb8idZ7s7WiWQN60WmhGRR-dcrIIGQ1mNJ2xs_r0cD_Ai1qsupTP64GaHEs-VBPD6m5um1Uj2lXuZcC1IzqZ1IB74HOZGQarSaAA3d');"></div>
<div class="flex-1">
<h3 class="font-bold text-charcoal dark:text-white text-base">Classic Charcoal Leather Wallet</h3>
<p class="text-slate-400 text-sm">Material: Italian Calfskin</p>
<p class="text-primary font-bold mt-2">$245.00</p>
</div>
<div class="text-right">
<span class="text-slate-400 text-sm">Qty: 1</span>
</div>
</div>
</div>
<!-- Summary -->
<div class="bg-white dark:bg-charcoal rounded-xl border border-slate-100 dark:border-slate-800 p-6 shadow-sm">
<div class="space-y-3">
<div class="flex justify-between text-sm">
<span class="text-slate-500">Subtotal</span>
<span class="text-charcoal dark:text-white font-medium">$1,495.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-slate-500">Shipping (Premium Insured)</span>
<span class="text-charcoal dark:text-white font-medium">$45.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-slate-500">Estimated Taxes</span>
<span class="text-charcoal dark:text-white font-medium">$124.00</span>
</div>
<div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-between">
<span class="text-base font-bold text-charcoal dark:text-white">Total</span>
<span class="text-xl font-black text-primary">$1,664.00</span>
</div>
</div>
</div>
</div>
<!-- Delivery Info Column -->
<div class="space-y-6">
<h2 class="text-xl font-bold text-charcoal dark:text-white">Delivery Details</h2>
<div class="bg-white dark:bg-charcoal rounded-xl border border-slate-100 dark:border-slate-800 p-6 shadow-sm">
<div class="space-y-6">
<div>
<p class="text-xs font-bold text-primary uppercase tracking-widest mb-2">Estimated Arrival</p>
<p class="text-charcoal dark:text-white font-bold text-lg">October 17, 2023</p>
<p class="text-slate-400 text-sm mt-1">Before 8:00 PM</p>
</div>
<div class="pt-6 border-t border-slate-100 dark:border-slate-800">
<p class="text-xs font-bold text-primary uppercase tracking-widest mb-2">Shipping Address</p>
<p class="text-charcoal dark:text-white font-medium">Jonathan Miller</p>
<p class="text-slate-500 dark:text-slate-400 text-sm">123 Luxury Lane<br/>Gold Coast, CA 90210<br/>United States</p>
</div>
<div class="pt-6 border-t border-slate-100 dark:border-slate-800">
<p class="text-xs font-bold text-primary uppercase tracking-widest mb-2">Tracking Number</p>
<div class="flex items-center gap-2">
<p class="text-charcoal dark:text-white font-medium">MK_99018827364</p>
<button class="text-primary">
<span class="material-symbols-outlined text-base">content_copy</span>
</button>
</div>
</div>
</div>
</div>
<!-- Support Card -->
<div class="bg-charcoal text-white rounded-xl p-6 shadow-xl relative overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-6xl">support_agent</span>
</div>
<h3 class="font-bold text-lg mb-2 relative z-10">Need help?</h3>
<p class="text-slate-400 text-sm mb-4 relative z-10">Our luxury concierge team is available 24/7 for any questions regarding your order.</p>
<button class="w-full py-2 bg-primary text-charcoal font-bold rounded-lg relative z-10 text-sm">Contact Concierge</button>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Section -->
<footer class="bg-charcoal text-white py-12 px-4 md:px-10 mt-10">
<div class="max-w-[960px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
<div>
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary text-3xl">diamond</span>
<span class="font-black text-xl tracking-tight">MK'S</span>
</div>
<p class="text-slate-400 text-sm leading-relaxed">Defining modern luxury since 2010. Hand-crafted pieces delivered with absolute care and precision.</p>
</div>
<div>
<h4 class="font-bold mb-6 text-primary">Customer Care</h4>
<ul class="space-y-4 text-sm text-slate-300">
<li><a class="hover:text-primary" href="#">Shipping Policy</a></li>
<li><a class="hover:text-primary" href="#">Returns &amp; Exchanges</a></li>
<li><a class="hover:text-primary" href="#">Size Guide</a></li>
<li><a class="hover:text-primary" href="#">Warranty Information</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6 text-primary">Stay Connected</h4>
<div class="flex gap-4 mb-6">
<a class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center hover:border-primary transition-colors" href="#">
<span class="material-symbols-outlined text-xl">public</span>
</a>
<a class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center hover:border-primary transition-colors" href="#">
<span class="material-symbols-outlined text-xl">share</span>
</a>
</div>
<p class="text-slate-500 text-xs">© 2023 MK's Luxury Store. All rights reserved.</p>
</div>
</div>
</footer>
</div>
</div>
</body></html>