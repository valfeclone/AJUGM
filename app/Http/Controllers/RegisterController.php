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
        // ddd($request);
        $validatedTeam = request()->validate([
        'name' => 'required',
        'universitas' => 'required',
        'select-cat' => 'required',
        'select-opt' => 'required',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
        ]);
        
        $validatedMember = request()->validate([
        'member-name-1' => 'required',
        'member-faculty-1' => 'required',
        'member-major-1' => 'required',
        'member-ktm-1' => 'required',
        'member-email-1' => ['required', 'string', 'email', 'max:255', 'unique:members,email'],
        ]);
        
        // $strTeam = implode(', ', $validatedTeam);
        // $strMember = implode(', ', $validatedMember);
        // ddd($strTeam.$strMember);
        
        $newTeam = User::create([
            'name' => $validatedTeam['name'],
            'universitas' => $validatedTeam['universitas'],
            'kategori_lomba' => $validatedTeam['select-cat'],
            'lomba' => $validatedTeam['select-opt'],
            'email' => $validatedTeam['email'],
            'password' => Hash::make($validatedTeam['password']),
            ]);
            
        $newMember = Member::create([
            'team_id' => $newTeam['id'],
            'name' => $validatedMember['member-name-1'],
            'fakultas' => $validatedMember['member-faculty-1'],
            'jurusan' => $validatedMember['member-major-1'],
            'path_foto_ktm' => $validatedMember['member-ktm-1'],
            'email' => $validatedMember['member-email-1'],
            'linkedin' => $request['member-linkedin-1'],
            ]);
                
        $newTeam->ketua_id = $newMember->id;
        $newTeam->save();
        
        // define variable buat simpan foto
        $file = $request->file('member-ktm-1');
        $tujuan_upload = storage_path('app/public/foto_ktm');
        
        // menyimpan file foto ktm yang diupload ke variabel $file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $newMember->path_foto_ktm = $file->getClientOriginalName();
        $newMember->save();
                
        //bikin logic loop
        for ($x = 2; $x <= 4; $x+=1) {
            if('member-name-'.$x){
                $newValidatedMember = request()->validate([
                    'member-name-'.$x => 'required',
                    'member-faculty-'.$x => 'required',
                    'member-major-'.$x => 'required',
                    'member-ktm-'.$x => 'required',
                    'member-email-'.$x => ['required', 'string', 'email', 'max:255', 'unique:members,email'],
                ]);
                $newMember2 = Member::create([
                    'team_id' => $newTeam['id'],
                    'name' => $newValidatedMember['member-name-'.$x],
                    'fakultas' => $newValidatedMember['member-faculty-'.$x],
                    'jurusan' => $newValidatedMember['member-major-'.$x],
                    'path_foto_ktm' => $newValidatedMember['member-ktm-'.$x],
                    'email' => $newValidatedMember['member-email-'.$x],
                    'linkedin' => $request['member-linkedin-'.$x],
                ]);

                // define variable buat simpan foto
                $file2 = $request->file('member-ktm-'.$x);
                $tujuan_upload2 = storage_path('app/public/foto_ktm');

                // menyimpan file foto ktm yang diupload ke variabel $file
                $file2->move($tujuan_upload2,$file2->getClientOriginalName());
                $newMember2->path_foto_ktm = $file2->getClientOriginalName();
                $newMember2->save();
            }
            else{
                break;
            }
        }
                    
        return($newTeam.$newMember);
    }
}