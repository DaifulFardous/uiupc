<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Problem;
use App\Models\Submission;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Storage;

class ProblemsController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories',compact('categories'));
    }
    public function problems($id){
        $problems = Problem::where('cat_id',$id)->get();
        return view('problems',compact('problems'));
    }
    public function problem($id){
        $problem = Problem::find($id);
        return view('problem',compact('problem'));
    }
    public function compile(Request $request){
        $language = strtolower($request->language);
        $code = $request->code;
        $random = substr(md5(mt_rand()), 0, 7);
        //mkdir(public_path('uploads/temp'), 0777, true);
        $filePath = "uploads/temp/" . $random . "." . $language;
        $programFile = fopen($filePath, "w");
        fwrite($programFile, $code);
        fclose($programFile);
        if($language == "php") {
          $output = shell_exec("F:\\xammp\php\php.exe $filePath 2>&1");
        }
        if($language == "python") {
            $output = shell_exec("C:\Python39\python.exe $filePath 2>&1");
        }
        if($language == "node") {
            rename($filePath, $filePath.".js");
            $output = shell_exec("node $filePath.js 2>&1");
        }
        if($language == "c") {
            $outputExe = $random . ".exe";
            shell_exec("gcc $filePath -o $outputExe");
            //$output = shell_exec(__DIR__ . "//$outputExe");
            $output = shell_exec("F:\\xammp\htdocs\UIUPC\public\\$outputExe");
        }
        if($language == "cpp") {
            $outputExe = $random . ".exe";
            shell_exec("g++ $filePath -o $outputExe");
            //$output = shell_exec(__DIR__ . "//$outputExe");
            $output = shell_exec("F:\\xammp\htdocs\UIUPC\public\\$outputExe");

        }
        return redirect()->back()->with('output',$output);
    }
    public function submit(Request $request){
        $isCorect = Problem::where('id', $request->prob_id)->first();
        $isValid = Submission::where('user_id',Auth::user()->id)->where('prob_id',$request->prob_id)->first();
        if($isValid){
            return redirect()->back()->with('warning','You can\'t submit a problem multiple times!!');
        }else{
            if( $request->output == $isCorect->output){
                $submission = new Submission();
                $submission->user_id = Auth::user()->id;
                $submission->user_name = Auth::user()->name;
                $submission->prob_id = $request->prob_id;
                $submission->save();
                return redirect()->back()->with('success','Submission Accepted');
            }else{
                return redirect()->back()->with('danger','Please try again!!');
            }

        }
    }
    public function leaderboard(){
        $users = DB::select('SELECT user_name, COUNT(user_name) as rank
        FROM submissions
        GROUP BY user_name
        ORDER BY COUNT(user_id) DESC;');
        return view('leaderboard', compact('users'));
    }
}