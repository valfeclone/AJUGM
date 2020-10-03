<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index_view ()
    {
        return view('pages2.admin.admin-data', [
            'admin' => Admin::class
        ]);
    }
    public function handleLogin (Request $req)
    {
        if(Auth::providers('users')->attempt([
            'username' => $req->username,
            'password' => $req->password,
        ])) {
            return redirect()->route('dashboard');
            } 
        else{
            return back()->withErrors('login');
        }
    }
}
