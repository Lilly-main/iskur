<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\JobPosting;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        $csvPath = database_path('seeders/sample_jobs.csv');
        if (!file_exists($csvPath)) {
            $this->command->error('CSV dosyası bulunamadı: ' . $csvPath);
            return;
        }
        $file = fopen($csvPath, 'r');
        $header = fgetcsv($file);
        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($header, $row);
            JobPosting::create([
                'ilan_basligi'     => $data['ilan_basligi'],
                'sirket_adi'       => $data['sirket_adi'],
                'sehir'            => $data['sehir'],
                'meslek'           => $data['meslek'],
                'maas_araligi'     => $data['maas_araligi'],
                'calisma_sekli'    => $data['calisma_sekli'],
                'baslangic_tarihi' => $data['baslangic_tarihi'],
                'is_detay'         => $data['is_detay'],
                'cinsiyet'         => $data['cinsiyet'],
                'yas_min'          => $data['yas_min'],
                'yas_max'          => $data['yas_max'],
            ]);
        }
        fclose($file);
    }
}
