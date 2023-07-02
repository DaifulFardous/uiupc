<?php

namespace App\Http\Controllers;

use App\Models\Grader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class GraderController extends Controller
{
    public function Index(){
        return view('grader.login');
    }
    public function Dashboard(){
        return view('grader.index');
    }
    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('grader')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('grader.dashboard');
        }else{
            return back()->with('error','Wrong data inserted');
        };

    }
    public function Logout(){
        Auth::guard('grader')->logout();
        return redirect()->route('grader-login-form')->with('error','Logout Successfully');
    }
    public function Register(){
        return view('grader.register');
    }
    public function RegisterCreate(Request $request){
        $grader = new Grader();
        $grader->name = $request->name;
        $grader->email = $request->email;
        $grader->password = Hash::make($request->password);
        $grader->created_at = Carbon::now();
        $grader->save();
        return redirect()->route('grader-login-form')->with('error','Admin Created Successfully');
    }
}