
<nav
    x-data="{ scrolled: false, open: false }"
    x-init="scrolled = window.scrollY > 50"
    @scroll.window="scrolled = window.scrollY > 50"
    :class="(scrolled || open)
        ? 'bg-white text-slate-800 shadow-md backdrop-blur-md'
        : 'bg-transparent text-white'"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">

        <img src="{{ asset('logo-amk.jpeg') }}" class="h-auto w-[70px]"/>

        {{-- Desktop menu --}}
        <div class="hidden items-center gap-8 md:flex">
            <a href="{{ url('/') }}"
               class="transition hover:text-amber-500 {{ request()->is('/') ? 'text-amber-500' : '' }}">
                Home
            </a>

            <a href="{{ url('/about-us') }}"
               class="transition hover:text-amber-500 {{ request()->is('about-us') ? 'text-amber-500' : '' }}">
                About
            </a>

            <a href="{{ url('/business-scope') }}"
               class="transition hover:text-amber-500 {{ request()->is('business-scope') ? 'text-amber-500' : '' }}">
                Business Scope
            </a>

            <a href="{{ url('/products') }}"
               class="transition hover:text-amber-500 {{ request()->is('products') ? 'text-amber-500' : '' }}">
                Product
            </a>

            <a href="{{ url('/contact-us') }}"
               class="transition hover:text-amber-500 {{ request()->is('contact-us') ? 'text-amber-500' : '' }}">
                Contact Us
            </a>
        </div>

        {{-- Mobile toggle --}}
        <button
            type="button"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-label="Toggle navigasi"
            class="rounded-lg p-2 md:hidden"
        >
            <svg
                x-show="!open"
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg
                x-cloak
                x-show="open"
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div
        x-cloak
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="border-t border-slate-200 bg-white px-4 py-4
               text-slate-800 shadow-lg md:hidden"
    >
        <div class="flex flex-col gap-4">
            <a href="{{ url('/') }}" @click="open = false"
               class="hover:text-amber-600 {{ request()->is('/') ? 'text-amber-600' : '' }}">Home</a>

            <a href="{{ url('/about-us') }}" @click="open = false"
               class="hover:text-amber-600 {{ request()->is('about-us') ? 'text-amber-600' : '' }}">About</a>

            <a href="{{ url('/business-scope') }}" @click="open = false"
               class="hover:text-amber-600 {{ request()->is('business-scope') ? 'text-amber-600' : '' }}">Business Scope</a>

            <a href="{{ url('/products') }}" @click="open = false"
               class="hover:text-amber-600 {{ request()->is('products') ? 'text-amber-600' : '' }}">Product</a>

            <a href="{{ url('/contact-us') }}" @click="open = false"
               class="hover:text-amber-600 {{ request()->is('contact-us') ? 'text-amber-600' : '' }}">Contact Us</a>
        </div>
    </div>
</nav>
