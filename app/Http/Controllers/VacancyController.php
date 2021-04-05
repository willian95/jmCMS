<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VacancyStoreRequest;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    
    function store(VacancyStoreRequest $request){

        try{

            $vacancy = new Vacancy;
            $vacancy->title = $request->title;
            $vacancy->description = $request->description;
            $vacancy->country_id = $request->country;
            $vacancy->save();

            return response()->json(["success" => true, "msg" => "Vacante creada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function edit($id){

        $vacancy = Vacancy::findOrFail($id);
        return view("vacancy.edit", ["vacancy" => $vacancy]);

    }

    function fetch($page = 1){

        try{

            $dataAmount = 20;
            $skip = ($page - 1) * $dataAmount;

            $vacancies = Vacancy::skip($skip)->take(20)->with("country")->get();
            $vacanciesCount = Vacancy::count();

            return response()->json(["success" => true, "vacancies" => $vacancies, "vacanciesCount" => $vacanciesCount, "dataAmount" => $dataAmount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function update(VacancyStoreRequest $request){

        try{

            $vacancy = Vacancy::find($request->id);
            $vacancy->title = $request->title;
            $vacancy->description = $request->description;
            $vacancy->country_id = $request->country;
            $vacancy->update();

            return response()->json(["success" => true, "msg" => "Vacante actualizada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function delete(Request $request){

        try{

            $vacancy = Vacancy::find($request->id);
            $vacancy->delete();

            return response()->json(["success" => true, "msg" => "Vacante eliminada"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un problema", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

}
