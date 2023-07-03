<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {

        $course = Course::where('status', Course::PUBLICADO)->latest('id')->get()->take(12);

        return view('welcome', compact('course'));
    }
}
