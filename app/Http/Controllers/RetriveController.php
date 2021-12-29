<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RetriveController;

class RetriveController extends Controller
{
    function selectAllRows(){

        // $result= DB::table('result')->get();

        $result= DB::table('result')->where('name','=','tuhin')->first();
        return $result;
        
    }

    function selectOneRows(){

        // $result= DB::table('result')->get();

        $result= DB::table('result')->where('name','=','deluar')->first();
        return json_encode ($result);
        
    }

    function selectfindRows(){

        // $result= DB::table('result')->get();

        $result= DB::table('result')->find(4);
        return json_encode ($result);
        
    }
}
