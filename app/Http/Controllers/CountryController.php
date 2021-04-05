<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    
    function all(){

        return response()->json(["countries" => Country::all()]);

    }

}
