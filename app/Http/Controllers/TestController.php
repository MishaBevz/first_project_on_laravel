<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;



class TestController extends Controller
{
    //

    public function test(){

    return view('test.test');


    }
}
