<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourcePles extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID ' => $this->resource->id,
            'Naziv ' => $this->resource->naziv,
            'Opis ' => $this->resource->opis,
            'Država porekla ' => $this->resource->drzavaPorekla,
            'Najpoznatija numera ' => $this->resource->najpoznatijaNumera
        ];
    }
}
