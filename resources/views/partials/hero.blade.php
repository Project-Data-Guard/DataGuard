<!-- Hero Section -->
<section id="beranda" class="relative pt-24 lg:pt-32 pb-16 lg:pb-24 overflow-hidden">
    <!-- Background gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-50/60 via-white to-amber-50/40 -z-10"></div>
    <div class="absolute top-20 right-0 w-96 h-96 bg-primary-100/30 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-amber-100/20 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <!-- Left Content -->
            <div class="animate-fade-in-up">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-50 border border-amber-200 rounded-full mb-6">
                    <span class="text-lg">✨</span>
                    <span class="text-sm font-semibold text-amber-700">Belajar Keamanan Data Pribadi</span>
                </div>

                <!-- Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Lindungi Dirimu<br>
                    di <span class="text-primary-500">Dunia Digital</span>
                </h1>

                <!-- Description -->
                <p class="text-lg text-gray-600 leading-relaxed mb-8 max-w-lg">
                    Data Guard adalah platform belajar interaktif untuk siswa SMA.
                    Pelajari cara melindungi data pribadimu lewat e-book interaktif dilengkapi quiz yang seru.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap items-center gap-4 mb-12">
                    <a href="#ebook" class="inline-flex items-center gap-2 px-7 py-3.5 bg-accent-400 text-white font-semibold rounded-full hover:bg-accent-500 transition-all duration-300 hover:shadow-lg hover:shadow-amber-400/30 text-sm">
                        Mulai Belajar
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="#ebook" class="inline-flex items-center gap-2 px-7 py-3.5 bg-white text-gray-700 font-semibold rounded-full border border-gray-200 hover:border-primary-300 hover:text-primary-500 transition-all duration-300 text-sm">
                        Lihat E-Book
                    </a>
                </div>

                <!-- Stats -->
                <div class="flex items-center gap-8 lg:gap-12">
                    <div class="animate-count-up animation-delay-200">
                        <div class="text-3xl font-extrabold text-primary-500">15+</div>
                        <div class="text-sm text-gray-500 font-medium">Soal Quiz</div>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div class="animate-count-up animation-delay-400">
                        <div class="text-3xl font-extrabold text-primary-500">3</div>
                        <div class="text-sm text-gray-500 font-medium">E-Book Gratis</div>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div class="animate-count-up animation-delay-600">
                        <div class="text-3xl font-extrabold text-primary-500">100%</div>
                        <div class="text-sm text-gray-500 font-medium">Gratis</div>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative animate-fade-in animation-delay-300">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-primary-500/10">
                    <img src="{{ asset('images/hero-illustration.png') }}" alt="DataGuard - Keamanan Data Pribadi" class="w-full h-auto animate-float">
                </div>
                <!-- Decorative dots -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent-400/10 rounded-full blur-xl"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-primary-500/10 rounded-full blur-xl"></div>
            </div>
        </div>
    </div>
</section>
