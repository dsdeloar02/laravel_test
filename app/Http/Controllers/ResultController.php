<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentsModel;

use App\Http\Controllers\ResultController;



class ResultController extends Controller
{
    function allSelect(){
        $result= StudentsModel::all();
        return $result;
    }
}
