<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function country(){

        return $this->belongsTo(Country::class);

    }

    public function appliances(){
        
        return $this->hasMany(Appliance::class, "vacancy_id", "id");
        
    }

}
