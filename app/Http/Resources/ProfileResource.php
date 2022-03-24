<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            
            'record_label' =>$this->record_label,
            'stage_name' =>$this->stage_name,
            'twitter_handle' => $this->twitter_handle,
            'instagram' => $this->instagram,
            'phone_number' => $this->phone_number,

        ];
    }
}
