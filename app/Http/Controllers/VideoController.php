<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\VideoRepository;

class VideoController extends Controller
{
    private $videoRepository;
    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }
    // 特定類別的影片
    public function ClassificationVideos($tagid,$page=1)
    {
        $content=$this->videoRepository->specifiedVideos($page,$tagid);
        $inter=$content["data"]["videos"];
        // 處理回傳值與狀態碼
        if($inter){
            $message="ok";
            $status=200;
        }else{
            $message="no data";
            $status=204;
        }
        return response()->json([
            "status"=>$status,
            "message"=>$message,
            "data"=>[
                "num"=>$content["data"]["num"],
                "page"=>$content["data"]["page"],
                "videos"=>$inter
            ]

        ],$status);
    }
}
