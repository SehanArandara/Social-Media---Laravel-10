<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store(){

        request()->validate([
            'idea' => 'required|min:5|max:200'
        ]);

        $idea = Idea::create([
            'content' =>request()->get('idea',''),
        ]);

        return redirect()
            ->route('dashboard')
            ->with('flash','Idea created Successfully');

        // dump();
    }

    public function destroy(Idea $idea){
        $idea->delete();

        return redirect()
            ->route('dashboard')
            ->with('flash','Idea Deleted Successfully');
    }

    public function show(Idea $idea){
        return view('ideas.shows',[
            "idea"=>$idea
        ]);
    }

    public function edit(Idea $idea){
        $editing =true;

        return view('idea-show',[
            'idea'=>$idea,
            'editing'=>$editing
        ]);
    }
}
