<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use App\Http\Requests\FileHandleRequest;

class FileUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function uploadPage()
    {
        return view('file-upload');
    }

    public function uploadFile(FileHandleRequest $request)
    {
        $request->myFile->storeAs('/img', 'sonic.jpg');
        return view('file-upload');

    }

    public function eraseFile(){
        
        //Storage::delete('/img/sonic.jpg');
        //File::delete(storage_path('/app/public/img/sonic.jpg'));
        unlink(storage_path('/app/public/img/sonic.jpg'));
        return 'Deleted!';

    }


    public function download()
    {
        return response()->download(storage_path('/app/public/img/sonic.jpg'));
    }
}
