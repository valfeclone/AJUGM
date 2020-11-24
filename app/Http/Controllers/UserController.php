<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index_view()
    {
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
    }

    public function verify_pembayaran($id)
    {
        $user = User::find($id);
        if ($user->path_bukti_bayar) {
            if ($user) {
                $user->validasi_pembayaran = true;
                $user->save();
                echo("tim diverifikasi");
            }
        } else {
            return redirect()->back()->with('error', 'Bukti pembayaran belum tersedia');
        }
        // return view('pages.user.user-data', [
        //     'user' => User::class
        // ]);
        return redirect()->back()->with('success', 'Verifikasi sukses');
        ;
    }
    
    //buat show team detail
    public function show_account()
    {
        $user = auth()->user();
        // return ($user);
        return view('dashboard_peserta.akun', [
            'user' => $user
        ]);
    }
}
