<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    public function __construct(){
        $this-> middleware(middleware: 'auth')-> except(methods: 'showString');
    }

    public function showString(){
        return "static string";
    }

    public function showString2(){
        return "static string2";
    }
}
