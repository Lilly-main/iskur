<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function getDistricts($cityId)
    {
        // İl ID'sine göre ilçeleri al
        $districts = District::where('city_id', $cityId)->get();

        // JSON formatında döndür
        return response()->json($districts);
    }
}
