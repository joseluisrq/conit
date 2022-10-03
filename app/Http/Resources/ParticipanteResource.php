<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipanteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return [
            'nombre'  => $this->nombre,
            'email'  => $this->email,
            'celular'  => $this->celular,
            'empresa'  => $this->empresa,
            'pagina'  => $this->pagina,
        ];
    }
}
