<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function index() {
        $instructors = Instructor::get();
        return view('instructors.index', compact('instructors'));
    }
}
