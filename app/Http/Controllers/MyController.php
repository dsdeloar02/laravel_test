<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller

{


       public function First(){
           return redirect('/second');
       }

       public function Second(){
        return "I am Second";
       }

       public function Download(){
        $path='demo.txt';
        return response()->download($path);
       }

}


/*{
    public function My($name){
        return response($name)
            ->header('name',$name)
            ->header('age','28')
            ->header('city','Sherpur')
            ->header('username','Rifat');
    }
}*/
