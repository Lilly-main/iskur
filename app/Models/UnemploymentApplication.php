<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnemploymentApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'id_number',
        'fesih_tarihi',
        'basvuru_tarihi',
        'city_id',
        'district_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
