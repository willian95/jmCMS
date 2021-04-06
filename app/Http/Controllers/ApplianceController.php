<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appliance;

class ApplianceController extends Controller
{
    
    function index(){

        return view("appliance.index");

    }

    function fetch($page = 1){

        try{

            $dataAmount = 20;
            $skip = ($page - 1) * $dataAmount;

            $appliances = Appliance::skip($skip)->take(20)->join('vacancies', 'appliances.vacancy_id', '=', 'vacancies.id')->orderBy("id", "desc")->get();
            $appliancesCount = Appliance::join('vacancies', 'appliances.vacancy_id', '=', 'vacancies.id')->orderBy("id", "desc")->count();

            return response()->json(["success" => true, "appliances" => $appliances, "appliancesCount" => $appliancesCount, "dataAmount" => $dataAmount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Something went wrong", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

}
