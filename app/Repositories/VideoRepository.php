<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Entity\Videos;
use App\Entity\Tags;

class VideoRepository
{
      /**
     * 特定類別影片
     *
     * @param  [int]    page
     * @param  [int]    tagid
     * @return [int]    num 總數
     * @return [int]    page 所在頁數
     * @return [array]  videos 影片資訊
     */
    public function specifiedVideos($page,$tagid){

        $tag=Tags::find($tagid);
 
        $video=$tag->videos;
  
        $data=$video->toArray();
        $inter=[];

        $collection = collect($data);
        // 該tag下的影片總數
        $all= $collection->count();
        // 每一分頁的資料筆數
        $each=20;
        $total=ceil($all/$each);
        // 總頁數
        $chunk = $collection->forPage($page, $each);
        // 將key 重置 為 0,1,2,3,4.......
        $b=array_values($chunk->all());
        for($i=0;$i<count($b);$i++){
            $inter[$i]["id"]=$b[$i]["id"];
            $inter[$i]["title"]=$b[$i]["title"];
            $inter[$i]["cover"]='https://idiyiqiyimm.com/'.$b[$i]["id"]."/".$b[$i]["id"].'.jpg';
        }
        return [
                    "data"=>[
                        "num"=>$total,
                        "page"=>$page,
                        "videos"=>$inter
                    ]
                ];

    }
  
}



