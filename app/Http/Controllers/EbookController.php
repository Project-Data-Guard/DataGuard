<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    private function getEbooks(): array
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Dasar-Dasar Keamanan Data Pribadi',
                'desc' => 'Pengenalan apa itu data pribadi dan mengapa penting dilindungi di era digital.',
                'long_desc' => 'E-Book ini membahas fondasi penting tentang keamanan data pribadi di era digital. Kamu akan memahami apa saja yang termasuk data pribadi, mengapa data tersebut berharga, dan bagaimana data pribadimu bisa disalahgunakan jika tidak dijaga dengan baik.',
                'level' => 'Pemula', 'levelColor' => 'bg-green-500', 'levelTextColor' => 'text-green-600', 'levelBgLight' => 'bg-green-50',
                'pages' => 11, 'gradient' => 'from-blue-400 to-blue-600',
                'author' => 'Tim DataGuard', 'published' => '2026', 'language' => 'Bahasa Indonesia', 'format' => 'Interaktif',
                'has_content' => true,
                'chapters' => [
                    ['title' => 'Kita Hidup di Era Digital', 'desc' => 'Mengapa data menjadi aset paling berharga di era modern.'],
                    ['title' => 'Apa Itu Data Pribadi?', 'desc' => 'Definisi dan kategori data pribadi menurut UU PDP.'],
                    ['title' => 'Mengapa Data Pribadimu Berharga?', 'desc' => 'Bagaimana data dimanfaatkan oleh berbagai pihak.'],
                    ['title' => 'Fakta Keamanan Data di Indonesia', 'desc' => 'Kasus kebocoran data nyata dan statistiknya.'],
                    ['title' => 'Dampak Kebocoran Data Pribadi', 'desc' => 'Pencurian identitas, penipuan, hingga pelecehan online.'],
                    ['title' => 'Prinsip CIA Triad & Mengapa Wajib Dilindungi', 'desc' => 'Confidentiality, Integrity, Availability.'],
                    ['title' => 'Ancaman Utama di Era Digital', 'desc' => 'Phishing, malware, social engineering, dan lainnya.'],
                    ['title' => 'Langkah Awal Melindungi Data', 'desc' => '8 langkah praktis yang bisa langsung diterapkan.'],
                    ['title' => 'Ringkasan Poin Penting', 'desc' => 'Rangkuman seluruh materi dalam satu halaman.'],
                ],
                'learnings' => [
                    'Memahami definisi data pribadi menurut UU PDP',
                    'Membedakan data umum dan data spesifik',
                    'Mengenali risiko kebocoran data pribadi',
                    'Menerapkan langkah dasar perlindungan data',
                    'Mengetahui prinsip CIA Triad',
                ],
                'quiz' => [
                    ['question' => 'Apa yang dimaksud dengan data pribadi menurut UU PDP No. 27 Tahun 2022?', 'options' => ['Data yang hanya berupa nama lengkap','Segala informasi yang dapat mengidentifikasi seseorang baik langsung maupun tidak langsung','Data yang tersimpan di komputer saja','Informasi yang dipublikasikan di media sosial'], 'answer' => 1],
                    ['question' => 'Manakah yang termasuk data pribadi spesifik (sensitif)?', 'options' => ['Nama lengkap dan alamat email','Nomor HP dan alamat rumah','Data biometrik, rekening bank, dan riwayat kesehatan','Jenis kelamin dan tanggal lahir'], 'answer' => 2],
                    ['question' => 'Apa prinsip utama dalam CIA Triad?', 'options' => ['Communication, Integration, Authentication','Confidentiality, Integrity, Availability','Control, Information, Access','Cybersecurity, Internet, Application'], 'answer' => 1],
                    ['question' => 'Langkah awal paling efektif melindungi data pribadimu?', 'options' => ['Membagikan password ke teman terpercaya','Menggunakan WiFi publik untuk semua aktivitas','Menggunakan password kuat dan unik serta mengaktifkan 2FA','Menyimpan semua password di catatan HP'], 'answer' => 2],
                    ['question' => 'Dampak kebocoran data pribadi adalah...', 'options' => ['Tidak ada dampak berarti','Hanya menerima spam email','Pencurian identitas, penipuan finansial, dan pelecehan online','Hanya kehilangan foto di media sosial'], 'answer' => 2],
                ],
            ],
            2 => [
                'id' => 2,
                'title' => 'Mengenal Phishing & Social Engineering',
                'desc' => 'Cara mengidentifikasi modus penipuan online yang sering menyasar remaja.',
                'long_desc' => 'Phishing dan social engineering adalah teknik penipuan paling umum di dunia digital. E-Book ini mengajarkan cara mengenali berbagai bentuk phishing dan teknik manipulasi psikologis yang digunakan penipu serta cara melindungi diri.',
                'level' => 'Menengah', 'levelColor' => 'bg-orange-500', 'levelTextColor' => 'text-orange-600', 'levelBgLight' => 'bg-orange-50',
                'pages' => 11, 'gradient' => 'from-orange-400 to-orange-600',
                'author' => 'Tim DataGuard', 'published' => '2026', 'language' => 'Bahasa Indonesia', 'format' => 'Interaktif',
                'has_content' => true,
                'chapters' => [
                    ['title' => 'Mengapa Remaja Jadi Sasaran Utama?', 'desc' => 'Alasan remaja paling rentan terhadap penipuan online.'],
                    ['title' => 'Apa Itu Phishing & Social Engineering?', 'desc' => 'Definisi, perbedaan, dan analogi sederhana.'],
                    ['title' => 'Modus Penipuan yang Menyasar Remaja', 'desc' => '8 modus dari giveaway palsu hingga investasi bodong.'],
                    ['title' => 'Taktik Psikologis Penipu', 'desc' => 'Urgensi, ketamakan, otoritas palsu, dan kelangkaan.'],
                    ['title' => 'Checklist Anti-Tipu', 'desc' => '8 pertanyaan yang harus kamu tanyakan sebelum klik.'],
                    ['title' => 'Sudah Terlanjur Kena Tipu?', 'desc' => 'Langkah pemulihan dan cara melaporkan penipuan.'],
                    ['title' => 'Tips Agar Tidak Jadi Korban', 'desc' => '9 tips praktis perlindungan dari penipuan online.'],
                ],
                'learnings' => [
                    'Mengenali berbagai bentuk phishing dan modus penipuan',
                    'Memahami teknik social engineering',
                    'Mengidentifikasi pesan dan link mencurigakan',
                    'Melaporkan upaya penipuan online',
                    'Melindungi diri dari serangan phishing',
                ],
                'quiz' => [
                    ['question' => 'Apa itu phishing?', 'options' => ['Teknik memancing ikan di internet','Upaya penipuan untuk mendapatkan data sensitif dengan menyamar sebagai pihak terpercaya','Cara membuat website gratis','Metode enkripsi data'], 'answer' => 1],
                    ['question' => 'Ciri-ciri email phishing adalah...', 'options' => ['Menggunakan alamat email resmi perusahaan','Tidak memiliki lampiran','Meminta data sensitif dengan urgensi tinggi dan link mencurigakan','Dikirim pada jam kerja'], 'answer' => 2],
                    ['question' => 'Apa yang dimaksud dengan social engineering?', 'options' => ['Membangun jembatan sosial','Teknik manipulasi psikologis untuk mendapatkan informasi atau akses','Teknik pemrograman website','Cara membuat media sosial'], 'answer' => 1],
                    ['question' => 'Jika menerima SMS berisi link dari nomor tak dikenal, sebaiknya...', 'options' => ['Langsung klik linknya','Forward ke teman','Jangan klik, verifikasi ke sumber resmi, dan laporkan','Balas SMS tersebut'], 'answer' => 2],
                    ['question' => 'Smishing adalah phishing melalui...', 'options' => ['Email','Telepon','SMS','Media sosial'], 'answer' => 2],
                ],
            ],
            3 => [
                'id' => 3,
                'title' => 'UU PDP untuk Pelajar',
                'desc' => 'Memahami Undang-Undang Perlindungan Data Pribadi dengan bahasa sederhana.',
                'long_desc' => 'Indonesia telah memiliki UU PDP yang melindungi hak warga negara atas data pribadinya. E-Book ini menjelaskan isi UU PDP dengan bahasa sederhana untuk pelajar SMA — hak-hakmu, kewajiban pengelola data, dan sanksi bagi pelanggar.',
                'level' => 'Lanjutan', 'levelColor' => 'bg-red-500', 'levelTextColor' => 'text-red-600', 'levelBgLight' => 'bg-red-50',
                'pages' => 12, 'gradient' => 'from-teal-500 to-teal-700',
                'author' => 'Tim DataGuard', 'published' => '2026', 'language' => 'Bahasa Indonesia', 'format' => 'Interaktif',
                'has_content' => true,
                'chapters' => [
                    ['title' => 'Apa Itu UU PDP?', 'desc' => 'Pengertian dan latar belakang UU No. 27 Tahun 2022.'],
                    ['title' => 'Mengapa UU PDP Itu Penting?', 'desc' => 'Alasan Indonesia membutuhkan undang-undang ini.'],
                    ['title' => 'Data Pribadi yang Dilindungi', 'desc' => 'Kategori data umum dan data spesifik.'],
                    ['title' => 'Isi UU PDP Secara Ringkas', 'desc' => '16 bab dan 76 pasal dalam 4 hal utama.'],
                    ['title' => 'Hak-Hakmu Sebagai Pemilik Data', 'desc' => 'Hak tahu, akses, koreksi, hapus, tarik persetujuan, ganti rugi.'],
                    ['title' => 'Kewajiban Pengelola Data', 'desc' => 'Aturan ketat untuk perusahaan dan pemerintah.'],
                    ['title' => 'Prinsip Dasar UU PDP', 'desc' => 'Transparansi, kewajaran, tujuan jelas, akurasi, keamanan.'],
                    ['title' => 'Sanksi Pelanggaran', 'desc' => 'Sanksi administratif dan pidana bagi pelanggar.'],
                    ['title' => 'Kaitannya dengan Kehidupan Pelajar', 'desc' => 'Penerapan UU PDP di sekolah dan keseharian.'],
                    ['title' => 'Cara Melindungi Data & Ringkasan', 'desc' => '8 langkah proaktif dan ringkasan 5 kalimat.'],
                ],
                'learnings' => [
                    'Memahami latar belakang dan isi UU PDP',
                    'Mengetahui hak-hak sebagai subjek data pribadi',
                    'Memahami kewajiban pengendali data',
                    'Mengenali sanksi pelanggaran UU PDP',
                    'Menerapkan UU PDP dalam kehidupan sehari-hari',
                ],
                'quiz' => [
                    ['question' => 'Kapan UU PDP disahkan di Indonesia?', 'options' => ['Tahun 2020','17 Oktober 2022','Tahun 2024','Tahun 2018'], 'answer' => 1],
                    ['question' => 'Hak utama subjek data pribadi menurut UU PDP?', 'options' => ['Hak untuk menjual data orang lain','Hak tahu, akses, koreksi, hapus, tarik persetujuan, dan ganti rugi','Hak untuk meretas sistem','Hak untuk mengabaikan keamanan data'], 'answer' => 1],
                    ['question' => 'Sanksi pidana pelanggar UU PDP bisa mencapai...', 'options' => ['Denda saja tanpa penjara','Penjara hingga 6 tahun dan denda hingga Rp6 miliar','Peringatan tertulis saja','Tidak ada sanksi'], 'answer' => 1],
                    ['question' => 'Siapa yang dimaksud "pengendali data"?', 'options' => ['Pengguna media sosial','Pihak yang menentukan tujuan dan cara pemrosesan data pribadi','Pemerintah saja','Hacker'], 'answer' => 1],
                    ['question' => 'Contoh penerapan UU PDP bagi pelajar?', 'options' => ['Membagikan data teman tanpa izin','Sekolah wajib melindungi data siswa dan meminta persetujuan','Mengabaikan kebijakan privasi','Menyebarkan foto orang tanpa izin'], 'answer' => 1],
                ],
            ],
        ];
    }

    public function show(int $id)
    {
        $ebooks = $this->getEbooks();
        if (!isset($ebooks[$id])) abort(404);
        $ebook = $ebooks[$id];
        $ids = array_keys($ebooks);
        $currentIndex = array_search($id, $ids);
        $prevEbook = $currentIndex > 0 ? $ebooks[$ids[$currentIndex - 1]] : null;
        $nextEbook = $currentIndex < count($ids) - 1 ? $ebooks[$ids[$currentIndex + 1]] : null;
        return view('ebook.show', compact('ebook', 'prevEbook', 'nextEbook'));
    }

    public function read(int $id)
    {
        $ebooks = $this->getEbooks();
        if (!isset($ebooks[$id])) abort(404);
        $ebook = $ebooks[$id];
        return view('ebook.read', compact('ebook'));
    }
}
