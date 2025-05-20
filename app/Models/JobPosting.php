<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'ilan_basligi',
        'sirket_adi',
        'sehir',
        'meslek',
        'maas_araligi',
        'calisma_sekli',
        'baslangic_tarihi',
        'is_detay',
        'cinsiyet',
        'yas_min',
        'yas_max',
    ];

    public function professions()
    {
        return $this->belongsToMany(Profession::class, 'job_posting_profession', 'job_posting_id', 'profession_id');
    }
}
