<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudUpdateController extends Controller
{
    public function index() {
        $users = DB::select('select * from college');
        return view('stud_edit_view', ['users' => $users]);
    }
    public function show($id) {
        $users = DB::select('select * from college where id = ?', [$id]);
        return view('stud_update', ['users' => $users]);
    }
    public function edit(Request $request, $id) {
        $name = $request->input('stud_name');
        DB::update('update college set name = ? where id = ?', [$name, $id]);
        echo "Record updated successfully.<br>";
        echo '<a href="/edit-records">Click Here</a> to go back.';
    }
}
