<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\PCProblem;
use App\Models\Result;
use App\Models\PCsubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\File;

class ContestController extends Controller
{
    public function index(){
        $contets = Contest::all();
        $items = Result::all();
        $results = $items->sortBy('position');
        $temp = DB::select('SELECT last_modified FROM result
                ORDER BY position DESC
                LIMIT 1');
        $date = null;
        if($temp){
            $date = $temp[0]->last_modified;
        }
        return view('contest', compact('contets','results','date'));
    }
    public function ContestAdd(){
        return view('admin.add-contest');
    }
    public function ContestStore(Request $request){
        $contest = new Contest();
        $contest->name = $request->name;
        $contest->time = $request->time;
        $contest->save();
        return redirect()->back()->with('success', 'Contest Saved Successfully');
    }
    public function ContestShow(){
        $contets = Contest::all();
        return view('admin.contests', compact('contets'));
    }
    public function contestDel($id){
        $contest = Contest::find($id);
        $problems = PCProblem::where('contest_id', $id)->get();
        $problems->each->delete();
        $contest->delete();
        return redirect()->back()->with('success', 'Contest Deleted Successfully');
    }
    public function ProblemAdd(){
        $contests = Contest::all();
        return view('admin.add-pcproblem', compact('contests'));
    }
    public function ProblemStore(Request $request){
        $problem = new PCProblem();
        $problem->contest_id = $request->contest_id;
        $problem->name = $request->name;
        $problem->description = $request->description;
        $problem->output = $request->output;
        $problem->save();
        return redirect()->back()->with('success','Problem saved successfully!!');
    }
    public function ProblemShow(){
        $problems = PCProblem::all();
        return view('admin.pcproblems', compact('problems'));
    }
    public function ProblemDel($id){
        $problem = PCProblem::find($id);
        $problem->delete();
        return redirect()->back()->with('success', 'Problem Deleted Successfully');
    }
    public function Cproblems($id){
        $problems = PCProblem::where('contest_id',$id)->get();
        $contest = Contest::find($id);
        return view('cProblens', compact('problems','contest'));
    }
    public function upload(Request $request){
        $submission = new PCsubmission();
        $isCorrect = Contest::where('name',$request->contest)->first();
        $isValid = PCsubmission::where('user_id',Auth::user()->id)->first();

        if($isValid){
            if($isCorrect->name == $isValid->contest){
                return redirect()->back()->with('danger', 'Your Can\'t Upload multiple time');
            }
        }
        else{
            if($request->hasFile('pcSubmission'))
            {
                $file = $request->file('pcSubmission');
                $ext = $file->getClientOriginalExtension();
                $fileName = time().'.'.$ext;
                $file->move('uploads/pcSubmission',$fileName);
                $submission->file = $fileName;
            }
            $submission->contest = $request->contest;
            $submission->user_id = Auth::user()->id;
            $submission->save();
            return redirect()->back()->with('success', 'Your Submission uploded for grading');
        }
    }
    public function pcproblem($id){
        $problem = PCProblem::find($id);
        return view('pcproblem', compact('problem'));
    }
    public function pcSubmission(){
        $submissions = PCsubmission::all();
        return view('admin.pcsubmission', compact('submissions'));
    }
    public function download($id){
        $file = PCsubmission::find($id);
        $fileName = $file->file;
        return response()->download(public_path('uploads/pcSubmission/'.$fileName));
    }
}