<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#c5a059",
                "charcoal": "#1a1a1a",
                "background-light": "#fcfbf7",
                "background-dark": "#0f0f0f",
              },
              fontFamily: {
                "display": ["Inter"]
              },
              borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "9999px"},
            },
          },
        }
      </script>
<title>Order Confirmation | OneStop</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-charcoal dark:text-slate-100">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Header -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 md:px-40 py-4 bg-white dark:bg-slate-900">
<div class="flex items-center gap-4 text-primary">
<div class="size-10 flex items-center justify-center">
<img alt="MK's Logo" class="w-full h-full object-contain" src=""/>
</div>
<h2 class="text-charcoal dark:text-slate-100 text-xl font-bold tracking-widest uppercase">MK'S</h2>
</div>
<div class="flex flex-1 justify-end gap-4 items-center">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-400 cursor-pointer">search</span>
<span class="material-symbols-outlined text-slate-600 dark:text-slate-400 cursor-pointer">shopping_bag</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-slate-200 dark:border-slate-700" data-alt="User profile avatar close up photo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBd51hVYHD5Et0O5sXmq7CcnL7lneZLEWukWgeBHl6l8Zrz17ex8uFl80NsYvyls00Yime7XkWNg38fU2Hw6t9lbKHK7vmuGsbb_aJhPVEoswFCIzpHzx6_MBo3Rh-TE7MM8GgV5WcUdNwlxoZexn4P6EVB967aR29i0qR_-pO5eynZfNmAU4askBbxZHLvEpnGtXLeUMXgBZTUcszoHx5Y5FtllNx4kv61oeNuLd-gIZE1nTX7z67P0CmTgfvFzoyukgfkY49PL-dx");'></div>
</div>
</header>
<main class="flex-1 px-4 md:px-40 py-10 flex justify-center">
<div class="layout-content-container flex flex-col max-w-[800px] flex-1">
<!-- Success Header -->
<div class="flex flex-col px-4 py-8 items-center text-center">
<div class="mb-6 flex items-center justify-center text-primary"><img alt="MK's Logo" class="size-32 object-contain mb-2" src=""/></div>
<div class="flex flex-col items-center gap-3">
<h1 class="text-charcoal dark:text-slate-100 text-3xl font-bold leading-tight tracking-tight uppercase">Thank you for your purchase!</h1>
<p class="text-slate-600 dark:text-slate-400 text-base font-normal max-w-[520px]">
                            Your order <span class="font-semibold text-primary">#OS-88291</span> has been placed successfully. We've sent a confirmation email to your inbox with full tracking details.
                        </p>
</div>
<div class="mt-8 flex flex-wrap justify-center gap-4">
<button class="flex min-w-[180px] cursor-pointer items-center justify-center overflow-hidden h-12 px-6 bg-primary text-white text-sm font-bold leading-normal tracking-wide shadow-lg shadow-primary/20 hover:bg-primary/90 transition-colors uppercase rounded-none">
<span class="truncate">Continue Shopping</span>
</button>
<button class="flex min-w-[180px] cursor-pointer items-center justify-center overflow-hidden h-12 px-6 bg-slate-200 dark:bg-slate-800 text-slate-900 dark:text-slate-100 text-sm font-bold leading-normal tracking-wide hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors rounded-none uppercase">
<span class="truncate">Track Order</span>
</button>
</div>
</div>
<!-- Order Details Card -->
<div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800">
<h2 class="text-slate-900 dark:text-slate-100 text-xl font-bold leading-tight">Order Summary</h2>
</div>
<!-- Item List -->
<div class="p-6 space-y-6">
<div class="flex items-start justify-between gap-6">
<div class="flex flex-1 gap-4">
<div class="w-24 h-24 bg-slate-100 dark:bg-slate-800 bg-center bg-no-repeat bg-cover rounded-lg flex-shrink-0" data-alt="Premium black wireless over-ear headphones" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDGLLegpqkntgGUJt8YPtDz0-PVcdaojaQFACR87N1YoB816GgCLAl1jAVVJB_3cBRfsliPhghlTlsA7oVnhDZcpWjxnoebx1zyKMC9rMhR1UQDvDUxFShoWWbHougyHjr0tFz3E38fX8e0bnTUpya-P0mXW-AraGX9HGaHX6RVCsUGihBJa4gEC2mRS6iRfvlubzFvj08TuAie0UDLVcsgNLo46iDytJuVgjoFYc2QvBkc8Pf9i9PiEhISrU8GIt2HY0YlVKZwZ8h9");'></div>
<div class="flex flex-col gap-1">
<p class="text-primary text-xs font-semibold uppercase tracking-wider">Arriving Friday, Oct 27</p>
<p class="text-slate-900 dark:text-slate-100 text-lg font-bold">Premium Wireless Headphones</p>
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal">Color: Space Gray • Qty: 1</p>
<div class="mt-2">
<button class="text-primary text-sm font-semibold hover:underline flex items-center gap-1">
                                            View Details <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="text-right">
<p class="text-slate-900 dark:text-slate-100 text-lg font-bold">$199.00</p>
</div>
</div>
</div>
<!-- Pricing Breakdown -->
<div class="p-6 bg-slate-50 dark:bg-slate-800/50 space-y-3">
<div class="flex justify-between items-center text-sm">
<p class="text-slate-500 dark:text-slate-400">Subtotal</p>
<p class="text-slate-900 dark:text-slate-100 font-medium">$199.00</p>
</div>
<div class="flex justify-between items-center text-sm">
<p class="text-slate-500 dark:text-slate-400">Shipping</p>
<p class="text-emerald-600 dark:text-emerald-400 font-medium italic">Free</p>
</div>
<div class="flex justify-between items-center text-sm">
<p class="text-slate-500 dark:text-slate-400">Estimated Tax</p>
<p class="text-slate-900 dark:text-slate-100 font-medium">$15.92</p>
</div>
<div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center">
<p class="text-slate-900 dark:text-slate-100 text-lg font-bold">Total Amount</p>
<p class="text-primary text-2xl font-bold">$214.92</p>
</div>
</div>
</div>
<!-- Shipping Info & Help -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
<div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">local_shipping</span>
<h3 class="font-bold text-slate-900 dark:text-slate-100">Shipping Address</h3>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Alex Johnson<br/>
                            1234 Silicon Avenue, Suite 500<br/>
                            San Francisco, CA 94103<br/>
                            United States
                        </p>
</div>
<div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">support_agent</span>
<h3 class="font-bold text-slate-900 dark:text-slate-100">Need help?</h3>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                            If you have any questions about your order, our support team is here 24/7.
                        </p>
<a class="text-primary text-sm font-bold hover:underline" href="#">Contact Support</a>
</div>
</div>
</div>
</main>
<footer class="mt-auto py-10 px-6 md:px-40 text-center border-t border-slate-200 dark:border-slate-800"><div class="flex flex-col items-center gap-4">
<img alt="MK's Logo" class="h-8 object-contain opacity-50 grayscale hover:grayscale-0 transition-all" src=""/>
<p class="text-slate-500 dark:text-slate-400 text-sm tracking-widest uppercase">© 2023 MK'S LUXURY RETAIL. ALL RIGHTS RESERVED.</p>
</div></footer>
</div>
</div>
</body></html>