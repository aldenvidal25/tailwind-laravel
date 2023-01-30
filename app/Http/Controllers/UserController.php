<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// public function show($id)
// {
//     $data = array(
//         "id" => $id,
//         "name" => "KodegoSP404",
//         "age" => 19,
//         "email" => "sp404@kodego.com.ph"
//     );
//     //return $id;
//     // return $data;
//     // return view('user', ['data' => $data]);
//     return view('user', $data);
// }

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }

    public function create()
    {
        return view('user.create');
    }

    public function show($id)
    {
        $data = ["data" => "data from database"];
        return view('user')
            ->with('data', $data)
            ->with('name', 'Kodego SP404 Class')
            ->with('age', 19)
            ->with('email', 'sp404@kodego.com.ph')
            ->with('id', $id); // ('hook', $variable)
    }
}
