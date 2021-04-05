<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileStoreRequest;
use Carbon\Carbon;

class FileController extends Controller
{

    function upload(FileStoreRequest $request){

        $originName = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->getClientOriginalExtension();
        $type = $request->file('file')->getClientMimeType();

        $fileName = Carbon::now()->timestamp . '_' . uniqid().'.'.$extension;
    
        $request->file('file')->move(public_path('file'), $fileName);
        $fileRoute = url('/').'/file/'.$fileName;

        return response()->json(["fileRoute" => $fileRoute, "originalName" => $originName,"extension" => $extension, "type" => $type]);

    }

    

}
