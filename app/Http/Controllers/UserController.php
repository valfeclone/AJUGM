<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index_view ()
    {
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
    }

    public function verify_pembayaran($id){
		$user = User::find($id);
		if($user) {
			$user->validasi_pembayaran = true;
            $user->save();
            echo("tim diverifikasi");
		}
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
	}
}
