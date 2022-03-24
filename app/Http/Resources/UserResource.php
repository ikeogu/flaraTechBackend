<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {   $names = explode(" ", $this->name);
        return [
            'id' => $this->id,
            'first_name' => $names[0],
            'last_name' => $names[1] ?? "",
            'middle_name' => implode(" ", array_slice($names, 2)) ?? "",
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'phone' => $this->phone,

            'details' => [
                'personal' => $this->personal_details ? new ProfileResource($this->personal_details) : (object)[],
            ],

        ];
    }
}
