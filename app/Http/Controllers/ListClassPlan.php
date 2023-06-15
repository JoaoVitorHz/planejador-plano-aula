<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListClassPlan extends Controller
{
    public function list(){
        return view('ListClassPlan');
    }
}
