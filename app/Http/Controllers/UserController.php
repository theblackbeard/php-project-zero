<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users.index');
    }

    public function show($id){
        return "index users - {$id}";
    }
}
