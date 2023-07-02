<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Problem;
use App\Models\User;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.login');
    }
    public function Dashboard(){
        return view('admin.index');
    }
    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard');
        }else{
            return back()->with('error','Whoops! Something went wrong.
            These credentials do not match our records.');
        };
    }
    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login-form')->with('error','Logout Successfully');
    }
    public function Register(){
        return view('admin.register');
    }
    public function RegisterCreate(Request $request){
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->created_at = Carbon::now();
        $admin->save();
        return redirect()->route('login-form')->with('error','Admin Created Successfully');
    }
    public function CategoryAdd(){
        return view('admin.add-category');
    }
    public function CategoryStore(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success','Category saved successfully!!');
    }
    public function CategoryShow(){
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }
    public function CategoryDel($id){
        $category = Category::find($id);
        $problems = Problem::where('cat_id', $id)->get();
        $problems->each->delete();
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully!!');
    }
    public function ProblemAdd(){
        $categories = Category::all();
        return view('admin.add-problem',compact('categories'));
    }
    public function ProblemStore(Request $request){
        $problem = new Problem();
        $problem->cat_id = $request->cat_id;
        $problem->name = $request->name;
        $problem->description = $request->description;
        $problem->output = $request->output;
        $problem->save();
        return redirect()->back()->with('success','Problem saved successfully!!');
    }
    public function ProblemShow(){
        $problems = Problem::all();
        return view('admin.problems', compact('problems'));
    }
    public function problemDel($id){
        $problems = Problem::find($id);
        $problems->delete();
        return redirect()->back()->with('success','Problem deleted successfully!!');
    }
    public function setResult(){
        $users = User::all();
        return view('admin.setResult');
    }
    public function storeResult(Request $request){
       $result = new Result();
       $result->last_modified = $request->date;
       $result->position = $request->position;
       $result->name = $request->name;
       $result->save();
       return redirect()->back()->with('success','Result Saved Successfully');

    }
    public function resetResult(){
        $result = Result::all();
        $result->each->delete();
        return redirect()->back()->with('success','Reset result successfully!');
    }
}
