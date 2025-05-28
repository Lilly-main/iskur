<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profession;

class ProfessionSeeder extends Seeder
{
    public function run(): void
    {
        // CSV dosyasını oku ve meslekleri ekle
        $filePath = storage_path('app/meslekler.csv');
        if (!file_exists($filePath)) {
            echo "CSV dosyası bulunamadı: $filePath\n";
            return;
        }
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if (!empty($data[0])) {
                    Profession::updateOrCreate(['name' => $data[0]]);
                }
            }
            fclose($handle);
        }
    }
}
