<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class BasicCURDController extends Controller
{
    function onSelect(){

        $jsonData= DB::select('select * from result');

        $jsonString=json_encode($jsonData);

        $selectData=json_decode($jsonString);

        return view('select',['selectKey'=>$selectData]);
        
    }
    function onInsert(){

    }
    function onDelete(){

    }
    function onUpdate(){

    }
}
