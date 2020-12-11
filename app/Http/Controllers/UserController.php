<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function updateUser(Request $request){
        $user = auth()->user();
        if($user){
            $validated = $request->validate([
                'name' => 'required',
                'universitas' => 'required',
                'email' => 'required',
            ]);
            $user->update($validated);
            return redirect()->back()->with('success', 'Update sukses');
        }
    }

    public function updateMember(Request $request){
        // ddd($user->member[0]);
        $user = auth()->user();
        if($user){
            $validated = $request->validate([
                'member-name-1' => 'required',
                'member-faculty-1' => 'required',
                'member-major-1' => 'required',
                'member-email-1' => 'required',
            ]);

            $user->member[0]->name = $validated['member-name-1'];
            $user->member[0]->fakultas = $validated['member-faculty-1'];
            $user->member[0]->jurusan = $validated['member-major-1'];
            $user->member[0]->email = $validated['member-email-1'];
            $user->member[0]->linkedin = $request['member-linkedin-1'];
            $user->member[0]->save();

            if($request['member-ktm-1']){
                // define variable buat simpan foto
                $file = $request->file('member-ktm-1');
                $tujuan_upload = storage_path('app/public/foto_ktm');

                // menyimpan file foto ktm yang diupload ke variabel $file
                $file->move($tujuan_upload,$file->getClientOriginalName());
                $user->member[0]->path_foto_ktm = $file->getClientOriginalName();
                $user->member[0]->save();
            }
            return redirect()->back()->with('success', 'Update sukses');
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
