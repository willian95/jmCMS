<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = ["Colombia", "USA", "España", "México"];

        foreach($countries as $country){

            if(!Country::where("name", $country)->exists()){

                $countryModel = new Country;
                $countryModel->name = $country;
                $countryModel->save();
    
            }

        }

    }
}
