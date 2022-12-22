<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ResourceTrener;
use App\Http\Resources\ResourcePles;

class ResourcePlesac extends JsonResource
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
            'JMBG ' => $this->resource->jmbg,
            'Ime ' => $this->resource->ime,
            'Prezime ' => $this->resource->prezime,
            'eAdresa ' => $this->resource->eAdresa,
            'Trener ' => new ResourceTrener($this->resource->trener),
            'Ples ' => new ResourcePles($this->resource->ples)
        ];
    }
}
