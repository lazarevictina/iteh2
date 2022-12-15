<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plesac;
//1 trener moze imati vise pleasaca, dok 1 plesac ima samo 1 trenera
class Trener extends Model
{
    use HasFactory;

    public function plesaci(){
        return $this->hasMany(Plesac::class); //vraca za klasu Trener vise plesaca
        //tj vracamo sve one plesace koji pripadaju tom treneru
    }
}

