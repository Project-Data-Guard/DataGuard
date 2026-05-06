@extends('layouts.app')

@section('content')
<!-- Spacer for fixed navbar -->
<div class="h-20"></div>

<!-- Hero Banner -->
<section class="relative py-12 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br {{ $ebook['gradient'] }} opacity-5 -z-10"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br {{ $ebook['gradient'] }} opacity-10 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8">
            <a href="/" class="hover:text-primary-500 transition-colors">Beranda</a>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <a href="/#ebook" class="hover:text-primary-500 transition-colors">E-Book</a>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-900 font-medium truncate max-w-xs">{{ $ebook['title'] }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-16">
            <!-- Left: Book Cover -->
            <div class="lg:col-span-1">
                <div class="sticky top-28">
                    <!-- Cover Card -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-primary-500/15 mb-6">
                        <div class="h-80 lg:h-96 bg-gradient-to-br {{ $ebook['gradient'] }} p-8 flex flex-col items-center justify-center">
                            <span class="absolute top-5 left-5 px-3 py-1 {{ $ebook['levelColor'] }} text-white text-xs font-bold rounded-full">{{ $ebook['level'] }}</span>
                            <span class="absolute top-5 right-5 px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-full">{{ $ebook['pages'] }} hal</span>
                            <svg class="w-20 h-20 text-white/80 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                            </svg>
                            <div class="text-white/90 text-xs font-bold uppercase tracking-wider">Data Guard #{{ $ebook['id'] }}</div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-3">
                        <a href="{{ route('ebook.read', $ebook['id']) }}" class="w-full flex items-center justify-center gap-2 px-6 py-3.5 bg-primary-500 text-white font-semibold rounded-xl hover:bg-primary-600 transition-all duration-300 hover:shadow-lg hover:shadow-primary-500/25">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                            Mulai Baca & Quiz
                        </a>
                        <a href="/#ebook" class="w-full flex items-center justify-center gap-2 px-6 py-3.5 bg-white text-gray-700 font-semibold rounded-xl border border-gray-200 hover:border-primary-300 hover:text-primary-500 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            Kembali ke Koleksi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Book Details -->
            <div class="lg:col-span-2">
                <!-- Level Badge -->
                <div class="inline-flex items-center px-3 py-1 {{ $ebook['levelBgLight'] }} rounded-full mb-4">
                    <span class="text-xs font-bold {{ $ebook['levelTextColor'] }} uppercase tracking-wider">Level {{ $ebook['level'] }}</span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4 leading-tight">{{ $ebook['title'] }}</h1>

                <!-- Description -->
                <p class="text-lg text-gray-600 leading-relaxed mb-8">{{ $ebook['long_desc'] }}</p>

                <!-- Meta Info -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-10">
                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                        <div class="text-xs text-gray-500 mb-1">Halaman</div>
                        <div class="font-bold text-gray-900">{{ $ebook['pages'] }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                        <div class="text-xs text-gray-500 mb-1">Penulis</div>
                        <div class="font-bold text-gray-900 text-sm">{{ $ebook['author'] }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                        <div class="text-xs text-gray-500 mb-1">Bahasa</div>
                        <div class="font-bold text-gray-900 text-sm">Indonesia</div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                        <div class="text-xs text-gray-500 mb-1">Format</div>
                        <div class="font-bold text-gray-900">{{ $ebook['format'] }}</div>
                    </div>
                </div>

                <!-- What You'll Learn -->
                <div class="mb-10">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        Yang Akan Kamu Pelajari
                    </h2>
                    <div class="bg-primary-50/50 border border-primary-100 rounded-2xl p-6">
                        <ul class="space-y-3">
                            @foreach ($ebook['learnings'] as $learning)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-gray-700">{{ $learning }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Table of Contents -->
                <div class="mb-10">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                        Daftar Isi
                    </h2>
                    <div class="space-y-3">
                        @foreach ($ebook['chapters'] as $index => $chapter)
                        <div class="group bg-white border border-gray-100 rounded-xl p-5 hover:shadow-md hover:border-primary-200 transition-all duration-300">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-gradient-to-br {{ $ebook['gradient'] }} rounded-xl flex items-center justify-center shrink-0">
                                    <span class="text-white font-bold text-sm">{{ $index + 1 }}</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 group-hover:text-primary-500 transition-colors">{{ $chapter['title'] }}</h3>
                                    <p class="text-sm text-gray-500 mt-1">{{ $chapter['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation between ebooks -->
                <div class="flex items-center justify-between pt-8 border-t border-gray-200">
                    @if ($prevEbook)
                    <a href="{{ route('ebook.show', $prevEbook['id']) }}" class="group flex items-center gap-3 text-gray-600 hover:text-primary-500 transition-colors">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        <div>
                            <div class="text-xs text-gray-400">Sebelumnya</div>
                            <div class="text-sm font-semibold truncate max-w-[200px]">{{ $prevEbook['title'] }}</div>
                        </div>
                    </a>
                    @else
                    <div></div>
                    @endif

                    @if ($nextEbook)
                    <a href="{{ route('ebook.show', $nextEbook['id']) }}" class="group flex items-center gap-3 text-gray-600 hover:text-primary-500 transition-colors text-right">
                        <div>
                            <div class="text-xs text-gray-400">Selanjutnya</div>
                            <div class="text-sm font-semibold truncate max-w-[200px]">{{ $nextEbook['title'] }}</div>
                        </div>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
