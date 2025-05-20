<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProfessionsImport;

class ProfessionSeeder extends Seeder
{
    public function run(): void
    {
        Excel::import(new ProfessionsImport, base_path('app/meslekler.xlsx'));
    }
}
