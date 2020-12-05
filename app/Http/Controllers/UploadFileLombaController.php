<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UploadFileLombaController extends Controller
{
	// public function upload(){
	// 	$user = auth()->user();
	// 	$kategori = $user->kategori;
	// 	return view('dashboard_peserta.upload_file')->with('kategori', $kategori);
	// }
 
	public function upload(){
		$user = auth()->user();
		$kategori = $user->kategori;
		return view('dashboard_peserta.uploadfile')->with('kategori', $kategori);
	}

	public function proses_upload(Request $request){
		ddd($request);
		$this->validate($request, [
			'file_lomba' => 'required',
			'file-pendukung' => 'required',
		]);

	    // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('file_lomba');
	    $filependukung = $request->file('file-pendukung');

		// menyimpan data file yang diupload ke variabel $file
        $tujuan_upload = storage_path('app/public/file_lomba');
        $file->move($tujuan_upload,$file->getClientOriginalName());

		// menyimpan data file pendukung yang diupload ke variabel $file-pendukung
        $tujuan_pendukung = storage_path('app/public/file_pendukung');
        $file->move($tujuan_pendukung,$filependukung->getClientOriginalName());
		
		$user = auth()->user();
		if($user) {
			$user->path_file_lomba = $file->getClientOriginalName();
			$user->path_file_pendukung = $file->getClientOriginalName();
			$user->save();
		}

        return redirect('/tim/update')->with('success', 'Upload file sukses');
	}

	public function proses_upload_link(Request $request){
		$this->validate($request, [
			'link_file_lomba' => 'required',
			'file-pendukung' => 'required',
		]);

		// menyimpan data file pendukung yang diupload ke variabel $file-pendukung
        $tujuan_pendukung = storage_path('app/public/file_pendukung');
        $file->move($tujuan_pendukung,$filependukung->getClientOriginalName());
	
		$user = auth()->user();
		if($user) {
			$user->path_file_lomba = $request->link_file_lomba;
			$user->path_file_pendukung = $file->getClientOriginalName();
			$user->save();
		}

        return redirect('/tim/update')->with('success', 'Upload file sukses');
	}
}