<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('ilan_basligi');
            $table->string('sirket_adi');
            $table->string('sehir');
            $table->string('meslek');
            $table->string('maas_araligi');
            $table->string('calisma_sekli');
            $table->date('baslangic_tarihi');
            $table->text('is_detay');
            $table->string('cinsiyet');
            $table->unsignedTinyInteger('yas_min');
            $table->unsignedTinyInteger('yas_max');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
}
