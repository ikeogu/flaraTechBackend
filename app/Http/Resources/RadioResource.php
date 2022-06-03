<?php

namespace App\Http\Resources;

use App\Models\Media;
use App\Models\User;
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
            'radio_id'=> $this->id,
            'name'=> $this->user->name,
            'email'=>$this->user->email,
           
            'status' => $this->status,
            'profile'=> $this->user->radio_details,
            'total_songs_approved' => Media::where('status','=','promoting')->count(),
            'total_songs_rejected' => Media::where('status', '=', 'rejected')->count(),
            'total_songs_promoted' => Media::where('status', '=', 'promoted')->count(),
        ];
    }
}
