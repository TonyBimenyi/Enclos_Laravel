<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function creat(){

        $types = DB::table('type_depenses')->get();
}
}
//lonesome avenue
