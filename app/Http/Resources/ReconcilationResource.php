<?php

namespace App\Http\Resources;

use App\Models\Radio;
use App\Models\User;
use App\Models\Media;

use Illuminate\Http\Resources\Json\JsonResource;

class ReconcilationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $radio =Radio::find($this->radio_id);
        $media = Media::find($this->media_id);
        return [
            'id'=> $this->id,
            'amount' => $this->amount,
            'radio_id' => $this->radio_id,
            'frequency' => $radio->frequency ?? '',
            'radio_name' => $radio->user->name ?? '',
            'song_title'=> $media->title,
            'artist'=>  User::find($media->user_id)->name,
            'amount_paid_by_artist' =>  $media->price,
            'stage_name' => User::find($media->user_id)->personal_details->stage_name,
            'paid_by' => User::find($this->paid_by)->name,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}
