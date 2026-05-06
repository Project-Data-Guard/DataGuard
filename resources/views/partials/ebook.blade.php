<!-- E-Book Section -->
<section id="ebook" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12">
            <div class="inline-flex items-center px-4 py-1.5 bg-primary-50 border border-primary-100 rounded-full mb-4">
                <span class="text-xs font-bold text-primary-600 uppercase tracking-wider">Perpustakaan Digital</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Koleksi <span class="text-primary-500">E-Book</span>
            </h2>
            <p class="text-gray-600 max-w-xl text-lg">
                Bacaan ringan dan padat untuk memperdalam wawasanmu tentang keamanan data pribadi.
            </p>
        </div>

        <!-- E-Book Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $ebooks = [
                ['num' => 1, 'title' => 'Dasar-Dasar Keamanan Data Pribadi', 'desc' => 'Pengenalan apa itu data pribadi dan mengapa penting dilindungi di era digital.', 'level' => 'Pemula', 'levelColor' => 'bg-green-500', 'pages' => 11, 'gradient' => 'from-blue-400 to-blue-600'],
                ['num' => 2, 'title' => 'Mengenal Phishing & Social Engineering', 'desc' => 'Cara mengidentifikasi modus penipuan online yang sering menyasar remaja.', 'level' => 'Menengah', 'levelColor' => 'bg-orange-500', 'pages' => 11, 'gradient' => 'from-orange-400 to-orange-600'],
                ['num' => 3, 'title' => 'UU PDP untuk Pelajar', 'desc' => 'Memahami Undang-Undang Perlindungan Data Pribadi dengan bahasa sederhana.', 'level' => 'Lanjutan', 'levelColor' => 'bg-red-500', 'pages' => 12, 'gradient' => 'from-teal-500 to-teal-700'],
            ];
            @endphp

            @foreach ($ebooks as $book)
            <div class="group bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-500 hover:-translate-y-1">
                <!-- Card Cover -->
                <div class="relative h-56 bg-gradient-to-br {{ $book['gradient'] }} p-6 flex items-center justify-center">
                    <span class="absolute top-4 left-4 px-3 py-1 {{ $book['levelColor'] }} text-white text-xs font-bold rounded-full">{{ $book['level'] }}</span>
                    <span class="absolute top-4 right-4 px-2.5 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-full">{{ $book['pages'] }} hal</span>
                    <svg class="w-16 h-16 text-white/80 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                    <div class="absolute bottom-4 left-6 text-white/90 text-xs font-bold uppercase tracking-wider">Data Guard #{{ $book['num'] }}</div>
                </div>

                <!-- Card Content -->
                <div class="p-5">
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary-500 transition-colors">{{ $book['title'] }}</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $book['desc'] }}</p>
                    <a href="{{ route('ebook.show', $book['num']) }}" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-primary-500 text-white text-sm font-semibold rounded-xl hover:bg-primary-600 transition-colors">
                        Lihat Detail
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
