<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plesac;
//1 ples moze da ima vise plesaca, dok se 1 plesac odnosi na 1 ples

class Ples extends Model
{
    protected $table = 'pless';
    use HasFactory;

    protected $fillable =['naziv',
        'opis',
        'drzavaPorekla',
        'najpoznatijaNumera'];


    public function plesaci(){
        return $this->hasMany(Plesac::class);
    }
    
}
