<!-- Tentang Section -->
<section id="tentang" class="py-16 lg:py-24 bg-gradient-to-b from-primary-500 to-primary-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-1.5 bg-white/15 backdrop-blur-sm rounded-full mb-6">
                <span class="text-xs font-bold text-white uppercase tracking-wider">Tentang Data Guard</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-6">
                Misi Kami: Membentuk<br>Generasi Aman Digital
            </h2>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto leading-relaxed">
                Data Guard hadir untuk membekali siswa SMA dengan literasi digital yang kuat
                tentang keamanan dan privasi data pribadi.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $features = [
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/></svg>',
                    'title' => 'Khusus Siswa SMA',
                    'desc' => 'Materi disusun dengan bahasa yang mudah dipahami remaja, lengkap dengan contoh sehari-hari.',
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                    'title' => 'Fokus Privasi',
                    'desc' => 'Topik mendalam tentang perlindungan data pribadi sesuai UU PDP terbaru.',
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>',
                    'title' => 'Belajar Interaktif',
                    'desc' => 'Tidak hanya membaca, tapi juga mencoba quiz untuk menguji pemahamanmu.',
                ],
                [
                    'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>',
                    'title' => 'Bisa Dipakai di Kelas',
                    'desc' => 'Cocok untuk pembelajaran mandiri maupun materi pendukung di sekolah.',
                ],
            ];
            @endphp

            @foreach ($features as $feature)
            <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 border border-white/10">
                <!-- Icon -->
                <div class="w-12 h-12 bg-white/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-white/25 transition-colors">
                    {!! $feature['icon'] !!}
                </div>
                <!-- Title -->
                <h3 class="font-bold text-lg mb-2">{{ $feature['title'] }}</h3>
                <!-- Description -->
                <p class="text-sm text-blue-100 leading-relaxed">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
