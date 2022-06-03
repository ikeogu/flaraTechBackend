<?php

namespace App\Http\Resources;

use App\Models\Radio;
use Illuminate\Http\Resources\Json\JsonResource;

class MusicStatus extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $radio = Radio::find($this->radio_id);
        return [
            'id' => $this->id,
            'radio_name'=> $radio->user->name,
            'frequency' => $radio->frequency,
            'price' => $radio->price,
            'status' => $this->status,

        ];
    }
}
