<?php

namespace App\Http\Resources;

use App\Models\Media;
use App\Models\Radio;
use Illuminate\Http\Resources\Json\JsonResource;

class MusicShedularResource extends JsonResource
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
            'id' => $this->id,
            'description' => $this->description,
            'time' => $this->time_,
            'days' => $this->days_,
            'media_id' => Media::find( $this->media_id)->title,
            'radio_id' => Radio::find($this->radio_id)->user->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
