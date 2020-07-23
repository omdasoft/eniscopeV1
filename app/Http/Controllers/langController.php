<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langController extends Controller
{
    public function lang($lang){
        \Cookie::queue(\Cookie::make('locale', $lang, 43200));
        return back();
    }
}
