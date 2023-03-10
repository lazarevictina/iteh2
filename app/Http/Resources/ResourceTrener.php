<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceTrener extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) //vraca niz podataka koje zelimo da se prikazu za trenera
    {
        return [
            'ID ' => $this->resource->id,
            'Naziv škole ' => $this->resource->nazivSkole,
            'JMBG ' => $this->resource->jmbg,
            'Ime i prezime ' => $this->resource->imePrezime,
            'Godište ' => $this->resource->godiste,
            'Godine iskustva ' => $this->resource->godineIskustva
        ];
    }
}
