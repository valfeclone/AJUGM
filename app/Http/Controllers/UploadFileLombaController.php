<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
 
class UploadFileLombaController extends Controller
{
    // public function upload(){
    // 	$user = auth()->user();
    // 	$kategori = $user->kategori;
    // 	return view('dashboard_peserta.upload_file')->with('kategori', $kategori);
    // }
 
    public function upload()
    {
        $user = auth()->user();
        // $kategori = $user->kategori;
        return view('dashboard_peserta.uploadfile')->with('user', $user);
    }

    public function proses_upload(Request $request)
    {
        $user = auth()->user();
        $kategori = $user->kategori;
        // ddd($request);
        $this->validate($request, [
            'file_lomba' => 'required|max:25600',
            'file-pendukung' => 'required|max:5120',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file_lomba');
        $filependukung = $request->file('file-pendukung');

        // menyimpan data file yang diupload ke variabel $file
        $tujuan_upload = storage_path('app/public/file_lomba/'.$kategori);
        $file->move($tujuan_upload, $file->getClientOriginalName());

        // menyimpan data file pendukung yang diupload ke variabel $file-pendukung
        $tujuan_pendukung = storage_path('app/public/file_pendukung/'.$kategori);
        $filependukung->move($tujuan_pendukung, $filependukung->getClientOriginalName());
        
        $user = auth()->user();
        if ($user) {
            $user->path_file_lomba = $file->getClientOriginalName();
            $user->path_file_pendukung = $filependukung->getClientOriginalName();
            $user->save();
        }

        return redirect('/tim/update')->with('success', 'Upload file sukses');
    }

    public function proses_upload_link(Request $request)
    {
        $user = auth()->user();
        $kategori = $user->kategori;

        $this->validate($request, [
            'link_file_lomba' => 'required',
            'file-pendukung' => 'required',
        ]);

        if (!STR::is('https://*', $request['link_file_lomba'])) {
            $request['link_file_lomba']='https://'.$request['link_file_lomba'];
        }

        // menyimpan data file yang diupload ke variabel $file
        $filependukung = $request->file('file-pendukung');

        // menyimpan data file pendukung yang diupload ke variabel $file-pendukung
        $tujuan_pendukung = storage_path('app/public/file_pendukung/'.$kategori);
        $filependukung->move($tujuan_pendukung, $filependukung->getClientOriginalName());
    
        $user = auth()->user();
        if ($user) {
            $user->path_file_lomba = $request->link_file_lomba;
            $user->path_file_pendukung = $filependukung->getClientOriginalName();
            $user->save();
        }

        return redirect('/tim/update')->with('success', 'Upload sukses');
    }
}
