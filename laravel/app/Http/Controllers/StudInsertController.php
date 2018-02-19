<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use laravel\Events\StudentAdded;

class StudInsertController extends Controller
{
    public function insertform() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        $name = $request->input('stud_name');
        DB::insert('insert into college (name) values(?)', [$name]);
        echo 'Record inserted successfully.<br>';
        echo '<a href="/insert">Click Here</a> to go back.';

        Event::fire(new StudentAdded($name));
    }
}
