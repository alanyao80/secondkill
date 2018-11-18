<?php

namespace App\Http\Controllers\Admin;

use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        //$rs = DB::insert("insert into student(name,age) values(?,?)",['alan','21']);

        //$rs = DB::update("update student set age=? where id='1' ",['20']);

        //$rs = DB::select("select * from student ");

        //$rs = DB::table('student')->insert(["name"=>'test','age'=>"3"]);
        //$rs = DB::table('student')->where("id",100)->update(["name"=>'test','age'=>"30"]);

        //$rs = Student::all()->toArray();
        $rs = Student::find('1')->toArray();
        //$rs = Student::findOrFail('0');

        /*$student = new Student();
        $student->name = 'testalan';
        $student->age = '18';
        $rs = $student->save();*/


        echo "<pre>";
        print_r($rs);
    }
}
