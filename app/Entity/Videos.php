<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;


class Videos extends Model
{
    //使用videos表   
    // protected $table="Videos";
    protected $guarded=[
        ""
    ];
    // protected $visible=["title"];
    public  function tags()
    {
        return $this->belongsToMany('App\Entity\Tags','video_tags','video_id','tag_id');
    }
}