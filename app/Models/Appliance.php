<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;

    public function vacancy(){
        return $this->belongsTo(Vacancy::class, "vacancy_id");
    }

}
