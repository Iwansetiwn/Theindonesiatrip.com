<header class="bg-white shadow-sm">
    <div class="container mx-auto">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="sr-only">The Indonesia Trip</span>
                    <img class="h-11 w-auto" src="{{ asset('images/logo.png') }}" alt="The Indonesia Trip">
                </a>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-4">
                @php
                    $navItems = [
                        'home' => 'Home',
                        'destination' => 'Destinations',
                        'service' => 'Services',
                        'about' => 'About'
                    ];
                @endphp

                @foreach($navItems as $route => $label)
                    <a href="{{ route($route) }}" 
                       class="text-gray-700 hover:text-primary transition duration-150 ease-in-out border-b-2 border-transparent hover:border-primary {{ request()->routeIs($route) ? 'text-primary border-primary' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>

            <!-- Icons -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-primary transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
                <a href="{{ route('wishlist') }}" class="text-gray-600 hover:text-primary transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a href="{{ route('cart') }}" 
                   class="text-gray-600 hover:text-primary transition duration-150 ease-in-out relative"
                   x-data="{ cartCount: 0 }"
                   x-init="cartCount = await (await fetch('/api/cart-count')).json()"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <template x-if="cartCount > 0">
                        <span 
                            x-text="cartCount"
                            class="absolute -top-2 -right-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-primary rounded-full"
                        ></span>
                    </template>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobileMenuOpen" class="md:hidden" x-cloak>
        <div class="px-2 pt-2 pb-3 space-y-1">
            @foreach($navItems as $route => $label)
                <a href="{{ route($route) }}" 
                   class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs($route) ? 'text-primary bg-gray-100' : 'text-gray-700 hover:text-primary hover:bg-gray-50' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</header>
