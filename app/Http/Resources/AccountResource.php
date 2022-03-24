<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'recipient_code' => $this->recipient_code,
            'recipient_id' => $this->recipient_id,
            'type' => $this->type,
            'number' => $this->number,
            'name' => $this->name,
            'bank_code' => $this->bank_code,
            'bank_name' => $this->bank_name,
            'bank_slug' => $this->bank_slug,
            'is_active' => $this->is_active,
            'balance' => $this->balance(),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
