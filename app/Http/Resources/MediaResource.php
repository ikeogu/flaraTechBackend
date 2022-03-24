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
        $data = [
            'id' => $this->id,
            'type' => $this->type,
            'title' => $this->title,
            'is_purchased' => $this->when(
                $this->is_promoted,
                $is_promoted
            ),
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];

        if ($this->type === 'album') {
            array_merge($data, [
                'tracks' => TrackResource::collection($this->tracks)
            ]);
        } elseif ($this->type === 'track') {
            array_merge($data, [
                'track' => new TrackResource($this->track)
            ]);
        }
        return $data;
    }
}
