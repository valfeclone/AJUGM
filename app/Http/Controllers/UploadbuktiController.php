<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UploadbuktiController extends Controller
{
	// public function upload(){
	// 	return view('dashboard_peserta.upload_bukti');
	// }
 
	public function upload(){
		return view('dashboard_peserta.uploadbukti');
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file_bukti_pembayaran' => 'required',
		]);

	    // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('file_bukti_pembayaran');

		// menyimpan data file yang diupload ke variabel $file
        $tujuan_upload = storage_path('app/public/bukti_pembayaran');
        $file->move($tujuan_upload,$file->getClientOriginalName());

		$user = auth()->user();
		if($user) {
			$user->path_bukti_bayar = $file->getClientOriginalName();
			$user->save();
		}

        return redirect('/tim/update')->with('success', 'Upload bukti sukses');
	}
}