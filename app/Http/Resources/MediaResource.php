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
        // if ($this->price) {
        //     $church = Church::get_church($request->route('church_slug'));
        //     $member = $church->members()->where('user_id', auth()->user()->id)->firstOrFail();
        //     $is_purchased = (bool)$this->income()->where('payer_type', Member::class)->where('payer_id', $member->id)->count();
        // }
        // dd($this->assigned_radioStation);
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
            'track' => new TrackResource($this->tracks),
            'radio_stations_assigned to' => RadioResource::collection($this->assigned_radioStation),
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];

        return $data;
    }
}
