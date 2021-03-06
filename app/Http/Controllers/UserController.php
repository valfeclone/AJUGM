<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('dashboard_peserta.update_user', [
            'user' => $user
        ]);
    }

    public function updateUser(Request $request)
    {
        $user = auth()->user();
        if ($user->validasi_pembayaran == false) {
            if ($user) {
                if ($request->email == $user->email){
                    $validated = $request->validate([
                        'name' => 'required',
                        'universitas' => 'required',
                        'email' => 'required|email',
                        'select-cat'=>'required',
                        'select-opt'=>'required',
                    ]);
                }
                else {
                    $validated = $request->validate([
                        'name' => 'required',
                        'universitas' => 'required',
                        'email' => 'required|email|unique:users',
                        'select-cat'=>'required',
                        'select-opt'=>'required',
                    ]);
                }
                $user->update($validated);
                $user->kategori = $validated['select-opt'];
                $user->kompetisi = $validated['select-cat'];

                if ($request->password) {
                    $request->validate([
                    'password'=>'required|min:8'
                ]);
                    $user->password = Hash::make($request['password']);
                    $user->save();
                }

                $user->save();
                return redirect()->back()->with('success', 'Update sukses');
            }
        } else {
            if ($request->password) {
                $request->validate([
                'password'=>'required|min:8'
            ]);
                $user->password = Hash::make($request['password']);
                $user->save();
                return redirect()->back()->with('success', 'Update password sukses');
            }
            return redirect()->back()->with('failure', 'Tidak ada yang diupdate');
        }
    }

    //buat show member
    public function show_member()
    {
        $user = auth()->user();
        // return ($user);
        return view('dashboard_peserta.member', [
            'user' => $user
        ]);
    }
}
