<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudViewController extends Controller
{
    public function index() {
        $users = DB::select('select * from college');
        return view('stud_view', ['users'=>$users]);
    }
}
