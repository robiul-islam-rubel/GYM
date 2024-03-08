<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function store(Request $request) {
        $new_trainer = new Trainer;
        $new_trainer->trainer_name = $request->trainer_name;
        $new_trainer->save();

        return redirect()->back();

    }

    public function index() {
        return view('add_trainer');
    }
}
