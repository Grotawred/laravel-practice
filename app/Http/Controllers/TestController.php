<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sum(){
        $i = 0;
        $sum = 0;
        while($i<=100){
            $sum += $i;
            $i++;
        }

        return $sum;
    }

    public function user(){
        dd('Grisha Vlasko');
    }
    public function users(){
        dd('Grisha Vlasko 17Lyceum');
    }

    public function showInfo(){
        return view('table', ['name1' => 'Alex', 'name2' => 'Den', 'name3' => 'Arthur']);
    }

    public function showAddInfoPage(){
        return view('form');
    }

    public function addInfo(Request $request){
        dd($request->get('name'), $request->get('description'));
    }

}
