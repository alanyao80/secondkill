<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class Order extends Controller
{
    public function index(){
        echo "buy index";
    }

    public function addGoods(){
        //这里虚拟数据,真实来自数据库
        $count = 10000;
        Redis::flushdb();           //临时清空,方便测试

        for($i=0;$i<$count;$i++){
            Redis::lpush('item',1);
        }
        echo "total goods:".Redis::llen('item');
    }

    public function secondKill(){
        $count = Redis::lpop("item");
        if(!$count){
            Log::error("error:no store redis");
            return "error:no store redis";
        }

        $sn = time("ymdH:i:s").rand(10000,99999);
        $item = [
            'id'=>rand(1000,9999),
            'uid'=>rand(100000,999999),
            'good_id'=>rand(1000,9999),
            'sn'=>$sn,
        ];

        Log::info("get goods ",$item);
        return "get goods ".$item['good_id'];
    }
}
