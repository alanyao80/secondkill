<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class Index extends Controller
{
    public function index(){
        echo "index";
        $store=150;
        $res=Redis::llen('goods_store');
        echo $res;
        $count=$store-$res;
        for($i=0;$i<$count;$i++){
            Redis::lpush('goods_store',1);
        }
        echo Redis::llen('goods_store');
        //Redis::flushdb();
    }

    private function addGoodsToRedis(){
        //这里虚拟数据,真实来自数据库
        $count = 10000;
        Redis::flushdb();           //临时清空,方便测试

        for($i=0;$i<$count;$i++){
            Redis::lpush('goods_store',"item".$i);
        }
        echo "total:".Redis::llen('goods_store');
    }

    public function show(){
        echo "show";
        echo Cache::get("keys");
    }

    public function login(){
       // echo "login";
        return view ("admin.login");
    }
}
