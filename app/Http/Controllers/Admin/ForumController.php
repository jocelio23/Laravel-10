<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    function ReturnList(){
        return view('Admin/index');
    }

    function createList(){
        return view('Admin/create');
    }
}
