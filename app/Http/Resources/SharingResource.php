<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SharingResource extends JsonResource
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
            'radio_id '=>$this->radio_id,
            'formular_admin '=>$this->formular_admin,
            'formular_radio '=>$this->formular_radio,
            'bio '=>$this->bio,
        ];
    }
}
