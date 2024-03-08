<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class HomeController extends Controller
{
    public function index() {
        $data = Trainer::all();
        return view('welcome',compact('data'));
    }
}
