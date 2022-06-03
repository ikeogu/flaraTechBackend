<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Radio;
use App\Models\User;

class SharingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {    
        if($this){
             $r = Radio::find($this->radio_id);
         $user = User::find($r->user_id);
        return [
            'id'=>$this->id,
            'radio_id'=>$this->radio_id,
             'name'=> $user->name,
             'frequency'=> $r->frequency,
             
            'formular_admin'=>$this->formular_admin,
            'formular_radio'=>$this->formular_radio,
            'bio'=>$this->bio,
        ];
        }
         
        
    }
}
