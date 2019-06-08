<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $tasks = [
            "Going to the gym",
            "Lets go to the gym",
            "Aaloo ka paratha kha lo",
            "Go to the concert"
        ];
    
        return view('welcome',[
            'tasks' => $tasks,
            'foo' => request('title'),
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function hobbies(){
        return view('hobbies');
    }


}
