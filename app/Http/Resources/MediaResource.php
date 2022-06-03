<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $is_promoted = false;
         
        $data = [
            'id' => $this->id,
            'type' => $this->type,
            'title' => $this->title,
            'is_purchased' => $this->when(
                $this->is_promoted,
                $is_promoted
            ),
            'price'=>$this->price,
            'status'=> $this->status,
            'track' =>  TrackResource::collection($this->tracks),
            'radio_stations_assigned_to' => RadioResource::collection($this->assigned_radioStation),
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];

        return $data;
    }
}
