<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResourceStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Resource;

class ResourcesController extends Controller
{
    
    function store(ResourceStoreRequest $request){

        try{

            $resource = new Resource;
            $resource->name = $request->name;
            $resource->filePath = $request->filePath;
            $resource->fileType = $request->fileType;
            $resource->save();

            return response()->json(["success" => true, "msg" => "Recurso creado"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function fetch($page = 1){

        try{

            $dataAmount = 20;
            $skip = ($page - 1) * $dataAmount;

            $resources = Resource::skip($skip)->take(20)->get();
            $resourcesCount = Resource::count();

            return response()->json(["success" => true, "resources" => $resources, "resourcesCount" => $resourcesCount, "dataAmount" => $dataAmount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function delete(Request $request){

        try{

            $resources = Resource::find($request->id);
            $fileName = str_replace(url('/'), "", $resources->filePath);

            if(Storage::exists($fileName)){
                Storage::delete($fileName);
            }
            

            $resources->delete();

            return response()->json(["success" => true, "msg" => "Recurso eliminado"]);

            return response()->json(["success" => true, "resources" => $resources, "resourcesCount" => $resourcesCount, "dataAmount" => $dataAmount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

}
