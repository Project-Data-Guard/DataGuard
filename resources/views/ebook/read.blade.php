@extends('layouts.app')

@section('content')
<div class="h-20"></div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-gray-500 mb-6">
        <a href="/" class="hover:text-primary-500 transition-colors">Beranda</a>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        <a href="{{ route('ebook.show', $ebook['id']) }}" class="hover:text-primary-500 transition-colors">{{ $ebook['title'] }}</a>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        <span class="text-gray-900 font-medium">Baca</span>
    </nav>

    {{-- Flipbook Container --}}
    <div id="flipbook-wrapper" class="relative select-none">
        {{-- Book --}}
        <div id="flipbook" class="relative mx-auto bg-white rounded-2xl shadow-2xl shadow-gray-400/30 overflow-hidden" style="max-width:900px; min-height:580px;">
            {{-- Pages will be populated from content --}}
            <div id="pages-source" class="hidden">
                @if($ebook['has_content'] && view()->exists('ebook.content.' . $ebook['id']))
                    @include('ebook.content.' . $ebook['id'])
                @else
                    <div class="book-page">
                        <div class="flex flex-col items-center justify-center h-full text-center p-12">
                            <svg class="w-20 h-20 text-amber-400 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                            <h3 class="text-2xl font-bold text-amber-800 mb-3">Materi Segera Hadir</h3>
                            <p class="text-amber-600 max-w-md">Konten untuk e-book ini sedang dalam proses penyusunan. Silakan selesaikan quiz di halaman terakhir.</p>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Visible page area --}}
            <div id="page-display" class="relative" style="min-height:580px;">
                <div id="current-page" class="absolute inset-0 p-8 sm:p-10 overflow-y-auto transition-opacity duration-300"></div>
                <div id="next-page" class="absolute inset-0 p-8 sm:p-10 overflow-y-auto opacity-0 pointer-events-none transition-opacity duration-300"></div>
            </div>

            {{-- Page curl decoration --}}
            <div class="absolute bottom-0 right-0 w-12 h-12 pointer-events-none" id="page-curl" style="background: linear-gradient(135deg, transparent 50%, rgba(0,0,0,0.03) 50%, rgba(0,0,0,0.08) 100%); border-radius: 0 0 16px 0;"></div>
        </div>

        {{-- Navigation Arrows --}}
        <button id="btn-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 sm:-translate-x-6 w-12 h-12 bg-white rounded-full shadow-lg border border-gray-200 flex items-center justify-center hover:bg-primary-50 hover:border-primary-300 transition-all duration-200 disabled:opacity-30 disabled:cursor-not-allowed z-10" disabled>
            <svg class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="btn-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 sm:translate-x-6 w-12 h-12 bg-white rounded-full shadow-lg border border-gray-200 flex items-center justify-center hover:bg-primary-50 hover:border-primary-300 transition-all duration-200 disabled:opacity-30 disabled:cursor-not-allowed z-10">
            <svg class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>

        {{-- Page Indicator --}}
        <div class="flex items-center justify-center gap-4 mt-6">
            <span id="page-info" class="text-sm font-medium text-gray-500">Halaman 1 / 1</span>
        </div>
        <div class="flex justify-center mt-3">
            <div id="page-dots" class="flex items-center gap-1.5 flex-wrap justify-center max-w-md"></div>
        </div>
    </div>

    {{-- Quiz Section (hidden until last page reached) --}}
    <div id="quiz-section" class="hidden max-w-4xl mx-auto mt-12">
        <div class="relative my-8">
            <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-200"></div></div>
            <div class="relative flex justify-center">
                <span class="bg-white px-6 text-sm font-bold text-primary-500 uppercase tracking-wider">Quiz Pemahaman</span>
            </div>
        </div>

        <div class="bg-gradient-to-br from-primary-50 to-blue-50 border border-primary-100 rounded-2xl p-6 sm:p-8 mb-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Quiz: {{ $ebook['title'] }}</h2>
                    <p class="text-sm text-gray-500">Jawab semua pertanyaan dengan benar untuk melanjutkan</p>
                </div>
            </div>
        </div>

        <div id="quiz-container">
            @foreach($ebook['quiz'] as $qIndex => $q)
            <div class="quiz-question mb-6 bg-white border border-gray-200 rounded-2xl p-6 transition-all duration-300" data-question="{{ $qIndex }}" data-answer="{{ $q['answer'] }}">
                <div class="flex items-start gap-3 mb-4">
                    <span class="w-8 h-8 bg-primary-100 text-primary-700 rounded-lg flex items-center justify-center text-sm font-bold shrink-0">{{ $qIndex + 1 }}</span>
                    <p class="font-semibold text-gray-900 pt-1">{{ $q['question'] }}</p>
                </div>
                <div class="space-y-3 ml-11">
                    @foreach($q['options'] as $oIndex => $option)
                    <label class="quiz-option flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 cursor-pointer hover:border-primary-300 hover:bg-primary-50/50 transition-all duration-200" data-option="{{ $oIndex }}">
                        <span class="w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center shrink-0 transition-all quiz-radio">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary-500 scale-0 transition-transform quiz-dot"></span>
                        </span>
                        <span class="text-sm text-gray-700">{{ $option }}</span>
                    </label>
                    @endforeach
                </div>
                <div class="quiz-feedback mt-4 ml-11 hidden"></div>
            </div>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <button id="quiz-submit" class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary-500 text-white font-semibold rounded-xl hover:bg-primary-600 transition-all duration-300 hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Periksa Jawaban
            </button>
        </div>
        <div id="quiz-result" class="hidden mt-8"></div>
        <div id="nav-buttons" class="hidden mt-8 flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="{{ route('ebook.show', $ebook['id']) }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl border border-gray-200 hover:border-primary-300 hover:text-primary-500 transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Detail
            </a>
            <a href="/#ebook" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary-500 text-white font-semibold rounded-xl hover:bg-primary-600 transition-all hover:shadow-lg">
                Pilih E-Book Lainnya
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== FLIPBOOK =====
    const source = document.getElementById('pages-source');
    const pages = Array.from(source.querySelectorAll('.book-page'));
    const display = document.getElementById('current-page');
    const nextDisplay = document.getElementById('next-page');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const pageInfo = document.getElementById('page-info');
    const pageDots = document.getElementById('page-dots');
    const quizSection = document.getElementById('quiz-section');
    let current = 0;
    const total = pages.length;

    // Build dots
    for (let i = 0; i < total; i++) {
        const dot = document.createElement('div');
        dot.className = 'w-2.5 h-2.5 rounded-full transition-all duration-300 cursor-pointer';
        dot.addEventListener('click', () => goToPage(i));
        pageDots.appendChild(dot);
    }

    function showPage(idx, direction) {
        if (idx < 0 || idx >= total) return;
        const incoming = pages[idx].innerHTML;

        if (direction === 'next') {
            nextDisplay.innerHTML = incoming;
            display.style.transform = 'translateX(-100%)';
            display.style.opacity = '0';
            nextDisplay.style.transform = 'translateX(0)';
            nextDisplay.style.opacity = '1';
            nextDisplay.classList.remove('pointer-events-none');
            setTimeout(() => {
                display.innerHTML = incoming;
                display.style.transition = 'none';
                display.style.transform = 'translateX(0)';
                display.style.opacity = '1';
                nextDisplay.style.opacity = '0';
                nextDisplay.classList.add('pointer-events-none');
                setTimeout(() => { display.style.transition = ''; }, 50);
            }, 350);
        } else if (direction === 'prev') {
            nextDisplay.innerHTML = incoming;
            display.style.transform = 'translateX(100%)';
            display.style.opacity = '0';
            nextDisplay.style.transform = 'translateX(0)';
            nextDisplay.style.opacity = '1';
            nextDisplay.classList.remove('pointer-events-none');
            setTimeout(() => {
                display.innerHTML = incoming;
                display.style.transition = 'none';
                display.style.transform = 'translateX(0)';
                display.style.opacity = '1';
                nextDisplay.style.opacity = '0';
                nextDisplay.classList.add('pointer-events-none');
                setTimeout(() => { display.style.transition = ''; }, 50);
            }, 350);
        } else {
            display.innerHTML = incoming;
        }

        current = idx;
        display.scrollTop = 0;
        btnPrev.disabled = current === 0;
        btnNext.disabled = current === total - 1;
        pageInfo.textContent = `Halaman ${current + 1} / ${total}`;

        // Update dots
        pageDots.querySelectorAll('div').forEach((d, i) => {
            if (i === current) {
                d.className = 'w-3 h-3 rounded-full bg-primary-500 transition-all duration-300 cursor-pointer scale-110';
            } else {
                d.className = 'w-2.5 h-2.5 rounded-full bg-gray-300 transition-all duration-300 cursor-pointer hover:bg-gray-400';
            }
        });

        // Show quiz when reaching last page
        if (current === total - 1) {
            quizSection.classList.remove('hidden');
        }
    }

    function goToPage(idx) {
        const dir = idx > current ? 'next' : idx < current ? 'prev' : null;
        showPage(idx, dir);
    }

    btnNext.addEventListener('click', () => showPage(current + 1, 'next'));
    btnPrev.addEventListener('click', () => showPage(current - 1, 'prev'));

    // Keyboard
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') showPage(current + 1, 'next');
        if (e.key === 'ArrowLeft') showPage(current - 1, 'prev');
    });

    // Swipe support
    let startX = 0, startY = 0;
    const wrapper = document.getElementById('flipbook');
    wrapper.addEventListener('touchstart', (e) => { startX = e.touches[0].clientX; startY = e.touches[0].clientY; }, {passive:true});
    wrapper.addEventListener('touchend', (e) => {
        const dx = e.changedTouches[0].clientX - startX;
        const dy = e.changedTouches[0].clientY - startY;
        if (Math.abs(dx) > Math.abs(dy) && Math.abs(dx) > 50) {
            if (dx < 0) showPage(current + 1, 'next');
            else showPage(current - 1, 'prev');
        }
    }, {passive:true});

    // Init
    if (total > 0) showPage(0, null);

    // ===== QUIZ =====
    const questions = document.querySelectorAll('.quiz-question');
    const submitBtn = document.getElementById('quiz-submit');
    const resultDiv = document.getElementById('quiz-result');
    const navButtons = document.getElementById('nav-buttons');
    const selected = {};

    questions.forEach(qEl => {
        const qIdx = qEl.dataset.question;
        qEl.querySelectorAll('.quiz-option').forEach(opt => {
            opt.addEventListener('click', () => {
                qEl.querySelectorAll('.quiz-option').forEach(o => {
                    o.classList.remove('border-primary-500', 'bg-primary-50');
                    o.querySelector('.quiz-radio').classList.remove('border-primary-500');
                    o.querySelector('.quiz-dot').classList.remove('scale-100');
                    o.querySelector('.quiz-dot').classList.add('scale-0');
                });
                opt.classList.add('border-primary-500', 'bg-primary-50');
                opt.querySelector('.quiz-radio').classList.add('border-primary-500');
                opt.querySelector('.quiz-dot').classList.remove('scale-0');
                opt.querySelector('.quiz-dot').classList.add('scale-100');
                selected[qIdx] = parseInt(opt.dataset.option);
                if (Object.keys(selected).length === questions.length) submitBtn.disabled = false;
            });
        });
    });

    submitBtn.addEventListener('click', () => {
        let correct = 0;
        const total = questions.length;
        questions.forEach(qEl => {
            const qIdx = qEl.dataset.question;
            const answer = parseInt(qEl.dataset.answer);
            const feedback = qEl.querySelector('.quiz-feedback');
            feedback.classList.remove('hidden');
            qEl.querySelectorAll('.quiz-option').forEach(o => o.style.pointerEvents = 'none');
            if (selected[qIdx] === answer) {
                correct++;
                qEl.classList.add('border-green-300', 'bg-green-50/50');
                feedback.innerHTML = '<div class="flex items-center gap-2 text-green-600 text-sm font-medium"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Benar!</div>';
            } else {
                qEl.classList.add('border-red-300', 'bg-red-50/50');
                feedback.innerHTML = '<div class="flex items-center gap-2 text-red-600 text-sm font-medium"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Salah. Jawaban: opsi '+(answer+1)+'</div>';
            }
        });
        submitBtn.classList.add('hidden');
        resultDiv.classList.remove('hidden');
        const passed = correct === total;
        const pct = Math.round((correct/total)*100);
        if (passed) {
            resultDiv.innerHTML = '<div class="bg-green-50 border border-green-200 rounded-2xl p-8 text-center"><div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="text-2xl font-bold text-green-800 mb-2">Selamat! 🎉</h3><p class="text-green-600 mb-1">Skor: '+correct+'/'+total+' ('+pct+'%)</p><p class="text-green-600 text-sm">Kamu telah menyelesaikan quiz dengan sempurna!</p></div>';
            navButtons.classList.remove('hidden');
        } else {
            resultDiv.innerHTML = '<div class="bg-red-50 border border-red-200 rounded-2xl p-8 text-center"><div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg></div><h3 class="text-2xl font-bold text-red-800 mb-2">Belum Berhasil</h3><p class="text-red-600 mb-1">Skor: '+correct+'/'+total+' ('+pct+'%)</p><p class="text-red-600 text-sm mb-4">Jawab semua dengan benar. Baca ulang materinya!</p><button onclick="location.reload()" class="inline-flex items-center gap-2 px-6 py-3 bg-red-500 text-white font-semibold rounded-xl hover:bg-red-600 transition-all">Coba Lagi</button></div>';
        }
        resultDiv.scrollIntoView({behavior:'smooth',block:'center'});
    });
});
</script>
<style>
#current-page, #next-page {
    transition: transform 0.35s cubic-bezier(.4,0,.2,1), opacity 0.35s ease;
}
#flipbook { position:relative; }
#page-display { position:relative; }
#current-page::-webkit-scrollbar, #next-page::-webkit-scrollbar { width:6px; }
#current-page::-webkit-scrollbar-thumb, #next-page::-webkit-scrollbar-thumb { background:#cbd5e1; border-radius:3px; }
</style>
@endpush
