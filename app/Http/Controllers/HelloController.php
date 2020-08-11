<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return view('topprofile');
    }
}



/*------------controllerからviewに送る----------------

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
$test_1 = "テスト1";
$test_2 = "テスト2";
       return view('test',compact('test_1', 'test_2'));
   }

}

-----------------------------------------------------*/
