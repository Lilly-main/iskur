<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $table = 'cities'; // Veritabanı tablosu adı

    public function districts()
    {
        return $this->hasMany(District::class, 'city_id');
    }
}