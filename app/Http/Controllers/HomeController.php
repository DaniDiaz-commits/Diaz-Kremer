<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        // $users = User::inRandomOrder()->limit(3)->get();
        // return view("home", compact("users"));
        return view("home");
    }
}
