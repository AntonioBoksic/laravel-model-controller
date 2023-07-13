<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// questo lo importo io per poter usare il model Student
use App\Models\Student;

class MainController extends Controller
{

    

    public function index() {

        $students = Student :: all();
        // dd($students[3]);

        return view("home", compact("students"));
    }
}
