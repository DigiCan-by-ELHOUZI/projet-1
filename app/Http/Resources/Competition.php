<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Competition extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idComp' => $this->idComp,
            'nom_comp' => $this-> nom_comp,
            'nb_max_participants' => $this->nb_max_participants,
            'date_comp' => $this->date_comp,
            'idLieu' => $this->idLieu,
            ];
}
