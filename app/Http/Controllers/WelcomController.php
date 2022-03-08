<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class WelcomController extends Controller
{
    public function index()
    {
        return view('home.welcome');

    }//end of index

    public function challenges()
    {
        $challenges = Challenge::latest()->take(6)->get();
        
        return view('home.challenges', compact('challenges'));

    }//end of challenges

}//end of controller
