<?php
namespace App\Imports;

use App\Models\Profession;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfessionsImport implements ToModel
{
    public function model(array $row)
    {
        return new Profession([
            'name' => $row[0], // Excel'deki ilk sütun meslek adını temsil eder
        ]);
    }
}