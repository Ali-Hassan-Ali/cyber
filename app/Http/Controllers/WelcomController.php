<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;
use App\Models\Task;

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

    public function task(Challenge $challenges)
    {
        $tasks = Task::where('challenges_id', $challenges->id)->get();
        
        return view('home.task', compact('tasks','challenges'));

    }//end of task

}//end of controller
