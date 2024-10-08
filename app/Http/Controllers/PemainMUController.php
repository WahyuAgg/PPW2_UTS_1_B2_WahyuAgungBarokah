<?php

namespace App\Http\Controllers;

use App\Models\PemainMU;
use Illuminate\Http\Request;

class PemainMUController extends Controller
{
    public function index(){
        // Mengambil semua data buku
        $pemain_mu = PemainMU::all();

        return view('pemain_mu', compact('pemain_mu'));
    }
}
