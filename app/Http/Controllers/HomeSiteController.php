<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSiteController extends Controller
{

    public function services(){
        return 'Services';
    }

    public function projects(){
        return 'projects';
    }

    public function contact(){
        return 'contact';
    }



}
