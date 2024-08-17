<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(){

        // $list="This list from Controller";


        //Data Process......

        $users=[
            ['name'=>'A name','city'=>'Dhaka','age'=>30],
            ['name'=>'B name','city'=>'Rajshahi','age'=>33],
            ['name'=>'C nameoe','city'=>'Khulna','age'=>35],
            ['name'=>'D name','city'=>'Barisal','age'=>40],

        ];
        // return view('pages.home',['home_list'=>$list]);
        return view('pages.home',['list'=>$users]);
    }
}
