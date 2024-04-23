<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'images' => 'img.jpg',
                'slug' => Str::of('Pernahkah Anda mendengar atau mengamati konsekuensi negatif bagi rekan kerja dengan kondisi kesehatan mental di tempat kerja Anda?')->slug('-'),
                'title' => 'Pernahkah Anda Mendengar atau Mengamati Konsekuensi Negatif Bagi Rekan Kerja dengan Kondisi Kesehatan Mental di Tempat Kerja Anda?',
                'body' => '<p>Kesehatan mental di tempat kerja adalah isu yang semakin mendapatkan perhatian. Pekerjaan dapat menjadi salah satu faktor yang mempengaruhi kesehatan mental seseorang. Stres, tekanan, ketidakseimbangan antara kehidupan kerja dan pribadi, serta konflik di tempat kerja adalah beberapa contoh faktor yang dapat berdampak pada kesehatan mental karyawan.</p><p>Mengamati atau mendengar konsekuensi negatif dari kondisi kesehatan mental rekan kerja di tempat kerja adalah hal yang sering terjadi. Beberapa tanda-tanda yang mungkin Anda amati adalah perubahan perilaku, penurunan produktivitas, absensi yang meningkat, atau bahkan gejala stres dan kecemasan yang terlihat jelas.</p><p>Penting untuk mengakui dan memahami pentingnya mendukung kesehatan mental di tempat kerja. Menciptakan lingkungan kerja yang mendukung, mempromosikan keseimbangan kehidupan kerja dan pribadi, serta menyediakan sumber daya dan dukungan untuk karyawan adalah langkah-langkah yang dapat diambil untuk mencegah dan mengatasi masalah kesehatan mental di tempat kerja.</p><p>Jika Anda mengamati atau mendengar rekan kerja yang mengalami kesulitan dengan kesehatan mental, penting untuk menawarkan dukungan, mendengarkan dengan empati, dan mengarahkan mereka ke sumber daya atau bantuan yang tepat. Kesehatan mental adalah bagian integral dari kesejahteraan keseluruhan, dan mendukung karyawan dalam menjaga kesehatan mental mereka adalah investasi yang berharga bagi semua pihak.</p>',
                'status' => 'enabled',
                'keywords' => array('Kesehatan Mental', 'Tempat Kerja', 'Rekan Kerja'),
                'viewcount' => 0,
                'writer' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            ],
            [
                'id' => 2,
                'images' => 'img1.jpg',
                'slug' => Str::of('Manajemen Stres dalam Dunia Teknologi')->slug('-'),
                'title' => 'Manajemen Stres dalam Dunia Teknologi',
                'body' => '<p>Stres adalah bagian tak terpisahkan dari kehidupan profesional, terutama di industri teknologi yang selalu berubah dan berkembang cepat. Untuk menghadapinya, penting bagi individu untuk memiliki strategi manajemen stres yang efektif.</p><p>Beberapa teknik yang dapat digunakan termasuk meditasi, olahraga rutin, dan pengaturan batas kerja yang sehat. Dengan mengimplementasikan strategi ini, seseorang dapat mengurangi dampak stres pada kesehatan mental dan kualitas hidupnya.</p>',
                'status' => 'enabled',
                'keywords' => array('Manajemen Stres', 'Dunia Teknologi', 'Kesehatan Mental'),
                'viewcount' => 0,
                'writer' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            ],
            [
                'id' => 3,
                'images' => 'img2.jpg',
                'slug' => Str::of('Keseimbangan Kerja dan Kesehatan Mental di Industri Teknologi')->slug('-'),
                'title' => 'Keseimbangan Kerja dan Kesehatan Mental di Industri Teknologi',
                'body' => '<p>Menjaga keseimbangan antara kerja dan kesehatan mental adalah tantangan besar bagi banyak profesional di industri teknologi. Dengan tuntutan kerja yang tinggi dan tekanan untuk terus berinovasi, mudah bagi karyawan untuk merasa stres dan terbakar.</p><p>Memahami kebutuhan diri sendiri, mengambil istirahat yang cukup, dan memanfaatkan sumber daya dukungan seperti konseling atau program kesejahteraan karyawan dapat membantu menjaga kesehatan mental dan keseimbangan kerja yang baik.</p>',
                'status' => 'enabled',
                'keywords' => array('Keseimbangan Kerja', 'Kesehatan Mental', 'Industri Teknologi'),
                'viewcount' => 0,
                'writer' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            ],
            [
                'id' => 4,
                'images' => 'img3.jpg',
                'slug' => Str::of('Mengapa Kesehatan Mental di Tempat Kerja Penting?')->slug('-'),
                'title' => 'Mengapa Kesehatan Mental di Tempat Kerja Penting?',
                'body' => '<p>Kesehatan mental di tempat kerja bukan hanya tentang ketenangan pikiran, tetapi juga tentang produktivitas, kebahagiaan, dan kepuasan kerja. Karyawan yang merasa dihargai dan didukung dalam kesehatan mentalnya cenderung lebih produktif, kreatif, dan berdedikasi terhadap pekerjaannya.</p><p>Stres dan tekanan kerja yang berlebihan dapat mengarah pada penurunan kinerja, absensi yang meningkat, dan turnover karyawan. Oleh karena itu, organisasi yang peduli terhadap kesehatan mental karyawan akan mendapatkan manfaat jangka panjang, termasuk retensi karyawan yang lebih baik dan lingkungan kerja yang lebih positif.</p><p>Investasi dalam kesehatan mental karyawan bukan hanya tanggung jawab moral, tetapi juga investasi strategis yang dapat meningkatkan produktivitas dan kinerja keseluruhan organisasi. Menciptakan budaya yang mendukung kesehatan mental di tempat kerja adalah langkah penting untuk keberhasilan jangka panjang.</p>',
                'status' => 'enabled',
                'keywords' => array('Kesehatan Mental', 'Tempat Kerja', 'Produktivitas'),
                'viewcount' => 0,
                'writer' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            ],
            [
                'id' => 5,
                'images' => 'img4.jpg',
                'slug' => Str::of('Cara Meningkatkan Kesehatan Mental di Tempat Kerja')->slug('-'),
                'title' => 'Cara Meningkatkan Kesehatan Mental di Tempat Kerja',
                'body' => '<p>Meningkatkan kesehatan mental di tempat kerja memerlukan pendekatan holistik yang melibatkan seluruh organisasi. Berikut adalah beberapa cara untuk meningkatkan kesehatan mental karyawan:</p><ul><li>Menciptakan lingkungan kerja yang mendukung, inklusif, dan bebas dari diskriminasi.</li><li>Menyediakan program kesejahteraan karyawan, termasuk akses ke konseling dan sumber daya kesehatan mental.</li><li>Promosi keseimbangan antara kehidupan kerja dan pribadi dengan fleksibilitas waktu kerja dan cuti yang cukup.</li><li>Mendorong komunikasi terbuka dan mendukung antara manajemen dan karyawan.</li><li>Mengadakan pelatihan tentang kesadaran kesehatan mental untuk meningkatkan pemahaman dan mengurangi stigma.</li></ul><p>Dengan menerapkan langkah-langkah ini, organisasi dapat menciptakan lingkungan kerja yang lebih sehat, produktif, dan berkelanjutan untuk semua karyawan.</p>',
                'status' => 'enabled',
                'keywords' => array('Kesehatan Mental', 'Tempat Kerja', 'Strategi'),
                'viewcount' => 0,
                'writer' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            ],

        ];

        foreach ($items as $key => $item) {
            Article::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}