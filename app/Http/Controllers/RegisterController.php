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

        $validatedTeam = request()->validate([
            'name' => 'required',
            'universitas' => 'required',
            'kategori_lomba' => 'required',
            'lomba' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $validatedMember = request()->validate([
            'member-name-1' => 'required',
            'member-faculty-1' => 'required',
            'member-major-1' => 'required',
            'member-ktm-1' => 'required',
            'member-email-1' => ['required', 'string', 'email', 'max:255'],
        ]);

        // $strTeam = implode(', ', $validatedTeam);
        // $strMember = implode(', ', $validatedMember);
        // ddd($strTeam.$strMember);

        $newTeam = User::create([
            'name' => $request['name'],
            'universitas' => $request['universitas'],
            'kategori_lomba' => $request['kategori_lomba'],
            'lomba' => $request['lomba'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $newMember = Member::create([
            'team_id' => $newTeam['id'],
            'name' => $request['member-name-1'],
            'fakultas' => $request['member-faculty-1'],
            'jurusan' => $request['member-major-1'],
            'path_foto_ktm' => $request['member-ktm-1'],
            'email' => $request['member-email-1'],
            'linkedin' => $request['member-linkedin-1'],
        ]);

        $newTeam->ketua_id = $newMember->id;
        $newTeam->save();

        return($newTeam.$newMember);
    }
}