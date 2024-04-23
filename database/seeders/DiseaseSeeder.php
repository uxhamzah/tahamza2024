<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // [
            //     'id' => 1,
            //     'code' => 'D001',
            //     'name' => 'Bukan Gangguan Kecemasan',
            //     'description' => '<h2><strong>Bukan Gangguan Kecemasan</strong></h2>'
            //     'type' => ''
            // ],
            [
                'id' => 1,
                'code' => 'D001',
                'name' => 'Apakah Anda memiliki riwayat penyakit mental dalam keluarga?',
                'description' => '<h2>Riwayat Penyakit Mental Dalam Keluarga</h2><p>Riwayat penyakit mental dalam keluarga dapat mempengaruhi risiko seseorang mengalami berbagai jenis gangguan mental. Beberapa gangguan mental yang dapat diturunkan antara lain adalah depresi, gangguan kecemasan, bipolar, skizofrenia, dan lain-lain.</p><p>Risiko ini dapat meningkat apabila ada anggota keluarga yang memiliki gangguan mental. Oleh karena itu, penting untuk mengetahui riwayat kesehatan mental dalam keluarga untuk memahami potensi risiko dan upaya pencegahan yang dapat dilakukan.</p><p>Penting juga untuk menyadari bahwa memiliki riwayat penyakit mental dalam keluarga tidak selalu berarti seseorang akan mengalami gangguan mental. Namun, kesadaran ini dapat membantu dalam pencegahan dan pengelolaan kesehatan mental.</p>',
                'type' => 'Jenis Gangguan Panik'
            ],
            [
                'id' => 2,
                'code' => 'D002',
                'name' => 'Sudahkah Anda mencari pengobatan untuk kondisi kesehatan mental?',
                'description' => '<p>Kondisi kesehatan mental adalah aspek yang penting untuk diperhatikan dalam menjaga kesejahteraan secara keseluruhan. Mengakui dan mencari pengobatan untuk masalah kesehatan mental adalah langkah penting untuk mendapatkan bantuan yang diperlukan. Berbagai jenis kondisi kesehatan mental seperti depresi, kecemasan, bipolar, dan lainnya dapat mempengaruhi kualitas hidup seseorang.</p><p>Mengatasi masalah kesehatan mental memerlukan perhatian dan perawatan yang tepat. Pengobatan dapat mencakup konseling, terapi, dan dalam beberapa kasus, penggunaan obat-obatan. Selalu konsultasikan dengan profesional kesehatan mental untuk mendapatkan diagnosis yang tepat dan rekomendasi pengobatan yang sesuai dengan kondisi Anda.</p><p>Menjaga kesehatan mental sama pentingnya dengan menjaga kesehatan fisik. Keduanya saling terkait dan mempengaruhi kualitas hidup secara keseluruhan. Jadi, jangan ragu untuk mencari bantuan jika Anda mengalami masalah kesehatan mental. Ada banyak sumber daya dan dukungan yang tersedia untuk membantu Anda.</p>',
                'type' => 'Jenis Gangguan Panik'
            ],
            [
                'id' => 3,
                'code' => 'D003',
                'name' => 'Jika Anda memiliki kondisi kesehatan mental, apakah Anda merasa hal tersebut mengganggu pekerjaan Anda?',
                'description' => '<p>Kondisi kesehatan mental dapat memiliki dampak yang signifikan terhadap kehidupan sehari-hari seseorang, termasuk dalam lingkungan kerja. Jika Anda mengalami kondisi kesehatan mental, Anda mungkin merasa sulit untuk berkonsentrasi, membuat keputusan, atau berinteraksi dengan rekan kerja. Hal ini dapat mempengaruhi produktivitas, kualitas pekerjaan, dan hubungan profesional Anda.</p><p>Mengakui dan mengatasi masalah kesehatan mental adalah langkah penting untuk menjaga kesejahteraan Anda, termasuk dalam pekerjaan. Penting untuk mencari dukungan dan bantuan yang diperlukan untuk mengelola kondisi kesehatan mental Anda, agar Anda dapat berfungsi sebaik mungkin dalam lingkungan kerja.</p><p>Berbagai sumber daya dan dukungan tersedia untuk membantu Anda mengatasi tantangan yang Anda hadapi, termasuk konseling, terapi, dan rencana perawatan kesehatan mental lainnya. Jangan ragu untuk mencari bantuan jika Anda merasa kondisi kesehatan mental Anda mengganggu pekerjaan Anda, karena Anda tidak sendiri dalam perjalanan ini.</p>',
                'type' => 'Jenis Gangguan Panik'
            ],
            [
                'id' => 4,
                'code' => 'D004',
                'name' => 'Apakah perusahaan Anda pada dasarnya adalah perusahaan/organisasi teknologi?',
                'description' => '<p>Mengidentifikasi diri sebagai perusahaan atau organisasi teknologi berarti fokus utama kegiatan Anda adalah pada pengembangan dan penerapan teknologi dalam berbagai aspek bisnis. Ini mencakup pengembangan perangkat lunak, layanan teknologi informasi, penelitian dan pengembangan, serta inovasi produk dan layanan berbasis teknologi.</p><p>Perusahaan atau organisasi teknologi biasanya berupaya untuk memanfaatkan teknologi untuk meningkatkan efisiensi, inovasi, dan kualitas layanan kepada pelanggan. Dalam era digital saat ini, perusahaan teknologi memainkan peran kunci dalam mengubah cara bisnis dan masyarakat beroperasi.</p><p>Jika perusahaan Anda memang berfokus pada teknologi dan berusaha untuk terus berkembang dan berinovasi dalam bidang teknologi, maka Anda dapat mengidentifikasi diri sebagai perusahaan atau organisasi teknologi.</p>',
                'type' => 'Jenis Gangguan Panik'
            ],
            [
                'id' => 5,
                'code' => 'D005',
                'name' => 'Apakah perusahaan Anda memberikan tunjangan kesehatan mental?',
                'description' => '<p>Memiliki dukungan kesehatan mental di tempat kerja merupakan hal yang penting untuk kesejahteraan karyawan. Tunjangan kesehatan mental dapat mencakup akses ke konseling, terapi, konsultasi dengan profesional kesehatan mental, dan sumber daya lain yang mendukung kesehatan mental karyawan.</p><p>Perusahaan yang memberikan tunjangan kesehatan mental menunjukkan komitmen mereka terhadap kesejahteraan karyawan. Ini menciptakan lingkungan kerja yang lebih sehat dan produktif, di mana karyawan merasa didukung dalam menghadapi tantangan kesehatan mental yang mungkin mereka alami.</p><p>Jika perusahaan Anda belum menawarkan tunjangan kesehatan mental, pertimbangkan untuk memperkenalkannya sebagai bagian dari paket manfaat karyawan. Hal ini dapat meningkatkan kepuasan dan retensi karyawan, serta mendukung produktivitas dan kesejahteraan umum di tempat kerja.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 6,
                'code' => 'D006',
                'name' => 'Pernahkah atasan Anda membahas kesehatan mental sebagai bagian dari program kesehatan karyawan?',
                'description' => '<p>Kesehatan mental karyawan adalah salah satu aspek yang penting untuk diperhatikan dalam lingkungan kerja. Menjaga kesejahteraan mental karyawan tidak hanya mempengaruhi produktivitas dan kinerja tetapi juga kualitas hidup mereka secara keseluruhan. Banyak perusahaan mulai menyadari pentingnya kesehatan mental dan telah memasukkannya sebagai bagian dari program kesehatan karyawan.</p><p>Pembahasan kesehatan mental oleh atasan dapat menciptakan lingkungan kerja yang lebih mendukung dan inklusif. Hal ini dapat memungkinkan karyawan untuk merasa lebih nyaman membicarakan masalah kesehatan mental mereka dan mencari bantuan jika diperlukan.</p><p>Atasan yang peduli terhadap kesehatan mental karyawan biasanya mempromosikan sumber daya dan dukungan yang tersedia, seperti konseling, program pelatihan kesehatan mental, dan akses ke layanan kesehatan mental. Menciptakan budaya kerja yang mendukung kesehatan mental dapat meningkatkan kepuasan kerja, retensi karyawan, dan produktivitas.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 7,
                'code' => 'D007',
                'name' => 'Apakah perusahaan Anda menyediakan sumber daya untuk mempelajari lebih lanjut tentang masalah kesehatan mental dan cara mencari bantuan?',
                'description' => '<p>Memahami dan peduli terhadap kesehatan mental karyawan adalah prioritas penting bagi perusahaan yang peduli terhadap kesejahteraan karyawannya. Menyediakan sumber daya dan informasi mengenai masalah kesehatan mental dapat menjadi langkah awal yang baik dalam mendukung karyawan yang mungkin menghadapi tantangan tersebut.</p><p>Perusahaan yang proaktif dalam menyediakan informasi dan sumber daya untuk masalah kesehatan mental dapat membantu karyawan dalam memahami gejala, mengenali tanda-tanda, dan mencari bantuan yang tepat. Ini juga dapat menciptakan lingkungan kerja yang mendukung, terbuka, dan inklusif bagi semua karyawan.</p><p>Mengakui pentingnya kesehatan mental dan menyediakan akses ke sumber daya yang relevan dapat membantu mencegah stres, kelelahan, dan burnout di tempat kerja. Ini tidak hanya bermanfaat bagi karyawan, tetapi juga dapat meningkatkan produktivitas, retensi karyawan, dan kepuasan kerja.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 8,
                'code' => 'D008',
                'name' => 'Seberapa mudah bagi Anda untuk mengambil cuti medis karena kondisi kesehatan mental?',
                'description' => '<p>Mengambil cuti medis untuk menjaga kesehatan mental merupakan langkah penting dalam perawatan dan pemulihan. Kesehatan mental sama pentingnya dengan kesehatan fisik, dan kadang-kadang memerlukan waktu dan ruang untuk istirahat dan pemulihan.</p><p>Memiliki akses yang mudah untuk mengambil cuti medis untuk kondisi kesehatan mental dapat membantu individu dalam mengelola stres, mencegah kemajuan gangguan kesehatan mental, dan meningkatkan kualitas hidup. Dengan mendapatkan waktu yang cukup untuk istirahat dan mendapatkan perawatan yang diperlukan, seseorang dapat kembali fokus dan produktif dalam kehidupan sehari-hari.</p><p>Penting bagi organisasi dan perusahaan untuk memahami pentingnya kesehatan mental dan memberikan dukungan yang diperlukan kepada karyawan untuk mengambil cuti medis jika diperlukan. Hal ini akan membantu menciptakan lingkungan kerja yang sehat, mendukung, dan memperhatikan kesejahteraan seluruh karyawan.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 9,
                'code' => 'D009',
                'name' => 'Apakah menurut Anda mendiskusikan masalah kesehatan mental dengan atasan Anda akan menimbulkan konsekuensi negatif?',
                'description' => '<p>Mendiskusikan masalah kesehatan mental dengan atasan Anda merupakan langkah penting dalam menjaga kesejahteraan Anda di tempat kerja. Transparansi mengenai kesehatan mental dapat membantu atasan memahami kondisi Anda dan memfasilitasi dukungan yang mungkin Anda butuhkan.</p><p>Walaupun ada kekhawatiran bahwa mendiskusikan masalah kesehatan mental bisa menimbulkan konsekuensi negatif, seperti diskriminasi atau stigmatisasi, penting untuk diingat bahwa banyak organisasi yang kini semakin memahami pentingnya kesehatan mental dan siap menyediakan sumber daya serta dukungan yang diperlukan.</p><p>Sebelum memutuskan untuk berbicara dengan atasan Anda, pertimbangkan untuk memiliki rencana komunikasi yang jelas dan tahu hak-hak Anda sebagai karyawan. Mengajak diskusi tentang kesehatan mental dapat menjadi langkah awal dalam membuka dialog yang positif dan mendapatkan dukungan yang Anda butuhkan.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 10,
                'code' => 'D0010',
                'name' => 'Apakah Anda bersedia mendiskusikan masalah kesehatan mental dengan rekan kerja Anda?',
                'description' => '<p>Mendiskusikan masalah kesehatan mental dengan rekan kerja adalah langkah yang penting untuk membangun lingkungan kerja yang inklusif dan mendukung. Komunikasi terbuka mengenai kesehatan mental dapat mengurangi stigma, meningkatkan pemahaman, dan menciptakan rasa saling peduli di tempat kerja.</p><p>Mengakui dan memahami tantangan yang dihadapi oleh rekan kerja dalam hal kesehatan mental dapat membantu dalam memberikan dukungan yang tepat. Ini juga dapat mempromosikan kesejahteraan karyawan dan meningkatkan produktivitas serta kepuasan kerja.</p><p>Menjadi pendengar yang baik, menawarkan dukungan, dan menunjukkan empati adalah beberapa cara sederhana untuk mendukung rekan kerja yang mengalami masalah kesehatan mental. Ingatlah bahwa mendengarkan dengan empati dan tidak menilai adalah kunci untuk menciptakan lingkungan kerja yang sehat dan mendukung bagi semua orang.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 11,
                'code' => 'D0011',
                'name' => 'Apakah Anda merasa bahwa atasan Anda menganggap kesehatan mental sama seriusnya dengan kesehatan fisik?',
                'description' => '<p>Pentingnya kesehatan mental di tempat kerja semakin diakui sebagai faktor penting dalam mendukung kesejahteraan karyawan dan produktivitas perusahaan. Memiliki lingkungan kerja yang mendukung kesehatan mental dapat meningkatkan kepuasan kerja, mengurangi stres, dan mencegah timbulnya masalah kesehatan mental.</p><p>Sayangnya, masih banyak individu yang merasa bahwa atasan mereka lebih fokus pada kesehatan fisik daripada kesehatan mental. Hal ini dapat menghambat komunikasi terbuka mengenai masalah kesehatan mental di tempat kerja dan mengurangi akses terhadap sumber daya dan dukungan yang diperlukan.</p><p>Memprioritaskan kesehatan mental di tempat kerja adalah investasi untuk masa depan karyawan dan organisasi. Dengan menciptakan lingkungan kerja yang mendukung kesehatan mental, organisasi dapat mempromosikan budaya yang inklusif, empatik, dan peduli terhadap kesejahteraan karyawan.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            [
                'id' => 12,
                'code' => 'D0012',
                'name' => 'Pernahkah Anda mendengar atau mengamati konsekuensi negatif bagi rekan kerja dengan kondisi kesehatan mental di tempat kerja Anda?',
                'description' => '<p>Kesehatan mental di tempat kerja adalah isu yang semakin mendapatkan perhatian. Pekerjaan dapat menjadi salah satu faktor yang mempengaruhi kesehatan mental seseorang. Stres, tekanan, ketidakseimbangan antara kehidupan kerja dan pribadi, serta konflik di tempat kerja adalah beberapa contoh faktor yang dapat berdampak pada kesehatan mental karyawan.</p><p>Mengamati atau mendengar konsekuensi negatif dari kondisi kesehatan mental rekan kerja di tempat kerja adalah hal yang sering terjadi. Beberapa tanda-tanda yang mungkin Anda amati adalah perubahan perilaku, penurunan produktivitas, absensi yang meningkat, atau bahkan gejala stres dan kecemasan yang terlihat jelas.</p><p>Penting untuk mengakui dan memahami pentingnya mendukung kesehatan mental di tempat kerja. Menciptakan lingkungan kerja yang mendukung, mempromosikan keseimbangan kehidupan kerja dan pribadi, serta menyediakan sumber daya dan dukungan untuk karyawan adalah langkah-langkah yang dapat diambil untuk mencegah dan mengatasi masalah kesehatan mental di tempat kerja.</p><p>Jika Anda mengamati atau mendengar rekan kerja yang mengalami kesulitan dengan kesehatan mental, penting untuk menawarkan dukungan, mendengarkan dengan empati, dan mengarahkan mereka ke sumber daya atau bantuan yang tepat. Kesehatan mental adalah bagian integral dari kesejahteraan keseluruhan, dan mendukung karyawan dalam menjaga kesehatan mental mereka adalah investasi yang berharga bagi semua pihak.</p>',
                'type' => 'Jenis Gangguan Kecemasan'
            ],
            
        ];

        foreach ($items as $key => $item) {
            Disease::updateOrCreate(['id' => $item['id']], $item);
        }   
    }
}
