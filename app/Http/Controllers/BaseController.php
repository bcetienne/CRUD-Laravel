<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use App\Cat as Cat;
use App\Gender as Gender;

class BaseController extends Controller
{
    public function index(){
        $cats = Cat::all();
        return view('welcome', ['cats' => $cats]);
    }
}
