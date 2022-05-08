<?php

namespace App\Http\Resources;

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
        return [
            'amount ' => $this->amount,
            'radio_id ' => $this->radio_id,
            'paid_by ' => $this->paid_by,
            'description ' => $this->description,
            'status ' => $this->status,
        ];
    }
}
