<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UploadFileLombaController extends Controller
{
	public function upload(){
		return view('upload_file');
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file_lomba' => 'required',
		]);

	    // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('file_lomba');

		// menyimpan data file yang diupload ke variabel $file
        $tujuan_upload = 'file_lomba';
        $file->move($tujuan_upload,$file->getClientOriginalName());
		
		$user = auth()->user();
		if($user) {
			$user->path_file_lomba = $tujuan_upload."/".($file->getClientOriginalName());
			$user->save();
		}

        echo "upload file sukses";
	}
}