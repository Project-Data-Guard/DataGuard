<!-- Modul Section -->
<section id="modul" class="py-16 lg:py-24 bg-amber-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12">
            <div class="inline-flex items-center px-4 py-1.5 bg-orange-100 border border-orange-200 rounded-full mb-4">
                <span class="text-xs font-bold text-orange-600 uppercase tracking-wider">Modul Pembelajaran</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
                Belajar Step-by-Step<br>Sampai <span class="text-accent-400">Mahir</span>
            </h2>
            <p class="text-gray-600 max-w-xl text-lg">
                6 modul terstruktur dengan quiz interaktif di setiap akhir modul. Cek pemahamanmu langsung!
            </p>
        </div>

        <!-- Modul Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $modules = [
                [
                    'num' => '01', 'color' => 'text-primary-500',
                    'title' => 'Pengenalan Data Pribadi',
                    'desc' => 'Pahami apa itu data pribadi, jenis-jenisnya, dan kenapa kamu wajib menjaganya.',
                    'duration' => '20 menit',
                    'topics' => ['Apa itu data pribadi', 'Jenis-jenis data', 'Risiko kebocoran'],
                ],
                [
                    'num' => '02', 'color' => 'text-accent-400',
                    'title' => 'Ancaman Dunia Maya',
                    'desc' => 'Kenali phishing, malware, dan pencurian identitas yang mengintai setiap hari.',
                    'duration' => '30 menit',
                    'topics' => ['Phishing & scam', 'Malware & virus', 'Identity theft'],
                ],
                [
                    'num' => '03', 'color' => 'text-green-500',
                    'title' => 'Membangun Password Aman',
                    'desc' => 'Bikin password kuat, kelola dengan password manager, dan aktifkan 2FA.',
                    'duration' => '15 menit',
                    'topics' => ['Karakteristik password kuat', 'Password manager', 'Aktifkan 2FA'],
                ],
                [
                    'num' => '04', 'color' => 'text-purple-500',
                    'title' => 'Privasi Media Sosial',
                    'desc' => 'Atur privasi akun, posting bijak, dan tahu kapan harus block & report.',
                    'duration' => '25 menit',
                    'topics' => ['Setting privasi', 'Bijak posting', 'Block & report'],
                ],
                [
                    'num' => '05', 'color' => 'text-red-500',
                    'title' => 'Belanja & Transaksi Online Aman',
                    'desc' => 'Cek toko terpercaya, lindungi data kartu, dan hindari WiFi publik untuk transaksi.',
                    'duration' => '20 menit',
                    'topics' => ['Cek toko terpercaya', 'Lindungi data kartu', 'Hindari WiFi publik'],
                ],
                [
                    'num' => '06', 'color' => 'text-orange-500',
                    'title' => 'Tanggap Insiden Kebocoran Data',
                    'desc' => 'Kenali tanda akun diretas, langkah pemulihan cepat, dan ke mana harus melapor.',
                    'duration' => '18 menit',
                    'topics' => ['Tanda-tanda akun diretas', 'Langkah pemulihan', 'Lapor ke siapa'],
                ],
            ];
            @endphp

            @foreach ($modules as $mod)
            <div class="group bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-xl hover:shadow-primary-500/8 transition-all duration-500 hover:-translate-y-1">
                <!-- Header -->
                <div class="flex items-start justify-between mb-4">
                    <span class="text-4xl font-extrabold {{ $mod['color'] }}">{{ $mod['num'] }}</span>
                    <div class="flex items-center gap-1.5 text-gray-400">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-xs font-medium">{{ $mod['duration'] }}</span>
                    </div>
                </div>

                <!-- Title & Description -->
                <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-500 transition-colors">{{ $mod['title'] }}</h3>
                <p class="text-sm text-gray-500 mb-5 leading-relaxed">{{ $mod['desc'] }}</p>

                <!-- Topics -->
                <ul class="space-y-2 mb-6">
                    @foreach ($mod['topics'] as $topic)
                    <li class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4 text-green-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $topic }}
                    </li>
                    @endforeach
                </ul>

                <!-- CTA -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <a href="#" class="text-sm font-semibold text-primary-500 hover:text-primary-600 transition-colors">Mulai Modul</a>
                    <div class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-primary-500 group-hover:border-primary-500 transition-all">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/></svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
