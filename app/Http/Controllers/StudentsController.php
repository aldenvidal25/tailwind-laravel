<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        //  $data = Students::all();
        // $data = Students::where('id', 3)->get();
        // $data = Students::where('first_name', 'like', '%an%')->get();
        // $data = Students::where('age', '>', '21')->get();
        // $data = Students::where('age', '>', '21')->orderBy('first_name', 'asc')->get();
        $data = Students::where('age', '>', '21')->orderBy('first_name', 'asc')->limit(5)->get();


        return view('students.index', ['students' => $data]);
    }
}
