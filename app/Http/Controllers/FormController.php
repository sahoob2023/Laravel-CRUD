<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    public function register(Request $request){
        $request->validate(
            [
                'name'=>['required'],
                'email'=>['required'],
                'gender'=>['required'],
                'addres'=>['required'],
                'pass'=>['required'],
                'confirm_password'=>['required'],
                'country1'=>['required'],
                'state1'=>['required'],
                'date1'=>['required'],
            ]
            );

        echo '<pre>';
        print_r($request->all());
        echo '</pre>';

     
    }
}
