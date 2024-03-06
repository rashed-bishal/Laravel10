<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class FileUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function uploadPage()
    {
        return view('file-upload');
    }

    public function uploadFile(Request $request)
    {
        $request->img->storeAs('/img', 'sonic.jpg');
        return view('file-upload');

    }

    public function eraseFile(){
        
        //Storage::delete('/img/sonic.jpg');
        //File::delete(storage_path('/app/public/img/sonic.jpg'));
        unlink(storage_path('/app/public/img/sonic.jpg'));
        return 'Deleted!';

    }
}
