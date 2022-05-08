<?php

namespace App\Http\Resources;

use App\Models\Media;
use Illuminate\Http\Resources\Json\JsonResource;

class RadioResource extends JsonResource
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
            'id'=> $this->id,
            'name'=> $this->name .' '. $this->frequency ,
            'email' => $this->email,
            'status' => $this->status,
            'price'=>$this->price,
            'profile'=> $this->radio_details,
            'total_songs_approved' => Media::where('status','=','promoting')->count(),
            'total_songs_rejected' => Media::where('status', '=', 'rejected')->count(),
            'total_songs_promoted' => Media::where('status', '=', 'promoted')->count(),
        ];
    }
}
