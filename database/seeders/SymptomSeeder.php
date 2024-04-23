<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
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
                'code' => 'S001',
                'name' => 'Kesulitan berkonsentrasi atau fokus'
            ],
            [
                'id' => 2,
                'code' => 'S002',
                'name' => 'Perasaan cemas atau gelisah berlebihan'
            ],
            [
                'id' => 3,
                'code' => 'S003',
                'name' => 'Mengalami kelelahan yang tidak wajar atau mudah lelah'
            ],
            [
                'id' => 4,
                'code' => 'S004',
                'name' => 'Perubahan mood yang cepat atau sering'
            ],
            [
                'id' => 5,
                'code' => 'S005',
                'name' => 'Kesulitan tidur atau gangguan tidur'
            ],
            [
                'id' => 6,
                'code' => 'S006',
                'name' => 'Perasaan putus asa atau kehilangan harapan'
            ],
            [
                'id' => 7,
                'code' => 'S007',
                'name' => 'Mengalami gangguan makan (makan berlebihan atau tidak makan sama sekali)'
            ],
            [
                'id' => 8,
                'code' => 'S008',
                'name' => 'Pengurangan minat atau kegembiraan dalam aktivitas sehari-hari'
            ],
            [
                'id' => 9,
                'code' => 'S009',
                'name' => 'Mengalami perasaan tertekan atau sedih yang berkepanjangan'
            ],
            [
                'id' => 10,
                'code' => 'S010',
                'name' => 'Kesulitan mengambil keputusan atau merasa tidak berdaya'
            ],
            [
                'id' => 11,
                'code' => 'S011',
                'name' => 'Mengalami perasaan bersalah yang berlebihan atau tidak beralasan'
            ],
            [
                'id' => 12,
                'code' => 'S012',
                'name' => 'Mengalami gangguan keseimbangan antara kehidupan pribadi dan profesional'
            ],
            [
                'id' => 13,
                'code' => 'S013',
                'name' => 'Mengalami penurunan produktivitas atau kinerja kerja'
            ],
            [
                'id' => 14,
                'code' => 'S014',
                'name' => 'Kesulitan beradaptasi dengan perubahan atau inovasi teknologi'
            ],
            [
                'id' => 15,
                'code' => 'S015',
                'name' => 'Mengalami isolasi sosial atau menghindari interaksi dengan rekan kerja'
            ],
            [
                'id' => 16,
                'code' => 'S016',
                'name' => 'Mengalami peningkatan ketegangan atau konflik di lingkungan kerja'
            ],
            [
                'id' => 17,
                'code' => 'S017',
                'name' => 'Kesulitan mengatasi stres atau tekanan kerja yang tinggi'
            ],
        ];
        

        foreach ($items as $key => $item) {
            Symptom::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
