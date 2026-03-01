<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 px-6 lg:px-20 py-4 bg-white sticky top-0 z-50">
    <div class="flex items-center gap-4 text-slate-900">
        <div class="size-8 flex items-center justify-center">
            <img alt="OneStop Logo" class="h-full object-contain" data-alt="OneStop ecommerce geometric abstract logo" src="" />
        </div>
    </div>
    <div class="flex flex-1 justify-end gap-6 items-center">
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-slate-600 hover:text-primary transition-colors text-sm font-medium leading-normal" href="{{ route('home') }}">Home</a>
            <a class="text-slate-600 hover:text-primary transition-colors text-sm font-medium leading-normal" href="{{ route('shop') }}">Shop</a>
            <a class="text-slate-600 hover:text-primary transition-colors text-sm font-medium leading-normal" href="{{ route('contact') }}">Contact</a>
        </nav>
        <div class="flex items-center gap-4">
            <button class="flex cursor-pointer items-center justify-center rounded-lg h-10 w-10 bg-slate-100 text-slate-700 hover:bg-primary/10 hover:text-primary transition-all">
                <span class="material-symbols-outlined">search</span>
            </button>
            <button class="flex cursor-pointer items-center justify-center rounded-lg h-10 w-10 bg-slate-100 text-slate-700 hover:bg-primary/10 hover:text-primary transition-all">
                <span class="material-symbols-outlined">person</span>
            </button>
            <a href="{{ route('cart') }}" class="relative flex cursor-pointer items-center justify-center rounded-lg h-10 w-10 bg-slate-100 text-slate-700 hover:bg-primary/10 hover:text-primary transition-all">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="absolute -top-1 -right-1 h-4 w-4 rounded-full bg-primary text-white text-xs flex items-center justify-center font-bold">3</span>
            </a>
            <button class="md:hidden flex cursor-pointer items-center justify-center rounded-lg h-10 w-10 bg-slate-100 text-slate-700 hover:bg-primary/10 hover:text-primary transition-all">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>
</header>