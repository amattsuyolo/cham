<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;


class Tags extends Model
{
    //使用videos表   
    // protected $table="Videos";
    protected $guarded=[
        ""
    ];
    public function videos()
    {
        // return $this->belongsToMany('App\Entity\Videos','video_tags');
        return $this->belongsToMany('App\Entity\Videos','video_tags','tag_id','video_id')
        ->withPivot("created_at");
    }
}