<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHPESERTA;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {

        ddd($request);

        $validated = request()->validate([
            'name' => 'required',
            'universitas' => 'required',
            'kategori_lomba' => 'required',
            'lomba' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        ddd($validated);

        // $this->validate($request, [
        //     'file_bukti_pembayaran' => 'required',
        //     'name' => 'required',
        //     'universitas' => 'required',
        //     'kategori_lomba' => ['required', 'numeric'],
        //     'lomba' => 'required',
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
        
        // return User::create([
        //     'name' => $request['name'],
        //     'universitas' => $request['universitas'],
        //     'kategori_lomba' => $request['kategori_lomba'],
        //     'lomba' => $request['lomba'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
    }
}