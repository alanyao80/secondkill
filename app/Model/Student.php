<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ="student";

    protected $dateFormat = 'U';
//    protected $primaryKey ="id";

    // 该模型是否被自动维护时间戳,默认为true
    //public $timestamps = true;
}
