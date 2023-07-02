<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile($id){
        $user = User::find($id);
        $submissions = Submission::where('user_id',$id)->get();
        $point = Submission::where('user_id',$id)->count();
        return view('profile', compact('user','submissions','point'));
    }
}