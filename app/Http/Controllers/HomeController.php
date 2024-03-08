<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Member;

class HomeController extends Controller
{
    public function index() {
        $data = Trainer::all();
        return view('welcome',compact('data'));
    }

    public function new_member() {
        return view('new_member');
    }

    public function add_new_member(Request $request) {
        $new_member = new Member;
        $new_member->name = $request->name;
        $new_member->phone = $request->phone;
        $new_member->email = $request->email;
        $new_member->admission_year = $request->admission_year;
        $new_member->session_name = $request->session_name;
        $new_member->package_id = $request->package_id;
        $new_member->source_id = $request->source_id;
        $new_member->save();

        return redirect()->back();
    }

    public function member() {
        $data = Member::all();
        return view('member',compact('data'));
    }
}
