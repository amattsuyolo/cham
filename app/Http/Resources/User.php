<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
    // public function toArray($request)
    // {
    //     // return parent::toArray($request);
    //     // return [
    //     //     'id' => $this->id,
    //     //     'name' => $this->name,
    //     //     'email' => $this->email,
    //     //     'created_at' => $this->created_at,
    //     //     'updated_at' => $this->updated_at,
    //     // ];
    //     $a= [
    //         'id' => $this->id,
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'created_at' => $this->created_at,
    //         'updated_at' => $this->updated_at,
    //     ];
    //     return [
    //         'data' => $a,
    //         'links' => [
    //             'self' => 'link-value',
    //         ],];
    // }
}
