<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="DataGuard Logo" class="w-9 h-9 rounded-full object-cover">
                <span class="text-xl font-bold text-gray-900">Data<span class="text-primary-500">Guard</span></span>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/#beranda" class="text-sm font-medium text-gray-700 hover:text-primary-500 transition-colors">Beranda</a>
                <a href="/#ebook" class="text-sm font-medium text-gray-700 hover:text-primary-500 transition-colors">E-Book</a>
                <a href="/#tentang" class="text-sm font-medium text-gray-700 hover:text-primary-500 transition-colors">Tentang</a>
            </div>

            <!-- CTA Button (hidden on ebook pages) -->
            <div class="flex items-center gap-3">
                @if(!request()->is('ebook/*'))
                <a href="#ebook" class="hidden sm:inline-flex items-center px-5 py-2.5 bg-primary-500 text-white text-sm font-semibold rounded-full hover:bg-primary-600 transition-all duration-300 hover:shadow-lg hover:shadow-primary-500/25">
                    Mulai Belajar
                </a>
                @endif

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
        <div class="px-4 py-4 space-y-3">
            <a href="/#beranda" class="block text-sm font-medium text-gray-700 hover:text-primary-500 py-2">Beranda</a>
            <a href="/#ebook" class="block text-sm font-medium text-gray-700 hover:text-primary-500 py-2">E-Book</a>
            <a href="/#tentang" class="block text-sm font-medium text-gray-700 hover:text-primary-500 py-2">Tentang</a>
            @if(!request()->is('ebook/*'))
            <a href="#ebook" class="block w-full text-center px-5 py-2.5 bg-primary-500 text-white text-sm font-semibold rounded-full hover:bg-primary-600">Mulai Belajar</a>
            @endif
        </div>
    </div>
</nav>
