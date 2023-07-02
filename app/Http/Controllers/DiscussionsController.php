<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{
    public function problems(){
        $problems = Problem::all();
        return view('discussionProbs', compact('problems'));
    }
    public function discussion($id){
        $problem = Problem::where('id',$id)->first();
        $comments = Discussion::where('prob_id',$id)->get();
        return view('discussion', compact('problem','comments'));
    }
    public function store(Request $request){
        $discussion = new Discussion();
        $discussion->prob_id = $request->prob_id;
        $discussion->user_id = Auth::user()->id;
        $discussion->body = $request->body;
        $discussion->save();
        return redirect()->back()->with('success','Comment Saved');
    }
    public function distroy($id){
        $discussion = Discussion::where('id', $id)->first();
        $discussion->delete();
        return redirect()->back()->with('deleted','Comment Deleted Sucssfully');
    }
}