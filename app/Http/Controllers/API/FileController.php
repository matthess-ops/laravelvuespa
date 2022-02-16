<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class FileController extends Controller
{
  

      public function upload(Request $request){
            error_log("TEST UPLOAD");
            if($request->hasFile('file')){
              error_log("heeft file");
              error_log($request->file);
              $path = Storage::putFile('avatars', $request->file('file'));
              error_log($path);
            }
            // $request->validate([
            //    'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
            // ]);

            // $fileUpload = new FileUpload;

            // if($request->file()) {
            //     $file_name = time().'_'.$request->file->getClientOriginalName();
            //     $file_path = $request->file('file')->storeAs('uploads', $file_name, 'public');

            //     $fileUpload->name = time().'_'.$request->file->getClientOriginalName();
            //     $fileUpload->path = '/storage/' . $file_path;
            //     $fileUpload->save();

            //     return response()->json(['success'=>'File uploaded successfully.']);
            // }
       }
}
