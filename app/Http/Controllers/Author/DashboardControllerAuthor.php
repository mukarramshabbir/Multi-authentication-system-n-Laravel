<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Author\DashboardController;

class DashboardControllerAuthor extends Controller
{
    public function index(){
        return view('author.dashboard');
    }
}
