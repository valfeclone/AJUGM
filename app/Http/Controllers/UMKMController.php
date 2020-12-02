<?php

namespace App\Http\Controllers;

use App\Models\umkm;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        $umkms=umkm::paginate(10);
        return view('creative_market', compact('umkms'));
    }

    public function show(umkm $umkm)
    {
        return view('specific_creative_market', compact('umkm'));
    }
}
