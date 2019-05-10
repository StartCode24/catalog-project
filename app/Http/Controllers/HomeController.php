<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Example;

class HomeController extends Controller
{
    public function index(){
        return view('content/WelcomeContent');
    }
}
