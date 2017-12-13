<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Color;

class CreateController extends Controller
{
    public function index()
    {
        $gendersAll = Gender::all();
        $genders = [];
        $colorsAll = Color::all();
        $colors = [];
        foreach ($colorsAll as $value) {
            $colors[$value->id] = $value->color;
        }
        return view('create', ['genders' => $genders, 'colors' => $colors]);
    }
}
