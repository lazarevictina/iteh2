<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;
//1 plesac moze da ima 1 trenera, a 1 trener se odnosi na vise plesaca 
use App\Models\Ples;

class Plesac extends Model
{
    use HasFactory;

    public function trener(){ //plesac pripada jednom treneru
        return $this->belongsTo(Trener::class);
    }

    public function ples(){
        return $this->belongsTo(Ples::class);
    }
   
}
