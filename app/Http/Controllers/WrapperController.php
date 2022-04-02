<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function surah(){
        $json = Http::get('https://api-alquranid.herokuapp.com/surah')->json();
        return response()->json($json);
    }
    public function nomorsurah(){
        $json = Http::get('https://api-alquranid.herokuapp.com/surah/nomorsurah')->json();
        return response()->json($json);
    }
    public function searchnamasurah(){
        $json = Http::get('https://api-alquranid.herokuapp.com/surah/search/namasurah')->json();
        return response()->json($json);
    }
    public function namasurah(){
        $json = Http::get('https://api-alquranid.herokuapp.com/surat/namasurah')->json();
        return response()->json($json);
    }
}
