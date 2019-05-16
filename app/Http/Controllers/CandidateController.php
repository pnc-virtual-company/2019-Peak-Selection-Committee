<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Ngo;
use App\Candidate;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $candidates= Candidate::all();
        return view('pages.listCondidate',compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id == 2){
            return redirect('candidates');
        } else {
            // $answer=Answer::all();
            // $question=Question::all();
            $ngo =Ngo::all();
            return view('pages.createCandidate',compact('ngo'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName="";

        if( $request->hasFile('inputFile')){
            $fileName=$request->file('inputFile')->getClientOriginalName();
            $request->file('inputFile')->storeAs('/public/img',$fileName);
        }
        $candidate=new Candidate;
        $candidate->Candidate_Name=$request->name;;
        $candidate->province=$request->province;
        $candidate->gender=$request->gender;
        $candidate->years=$request->slectionYears;
        $candidate->ngo_id=$request->ngo;
        $candidate->profile=$fileName;
        $candidate->Fill_By=$request->fil;
        $candidate->age=$request->age;
        $candidate->save();
        $answer=$request->answer;
        $i=0;
        $j=0;
        foreach($answer as $data){
            $candidate->answers()->attach($data);
            $getId=\DB::table('answer_candidate')->get()->last();
            \DB::table('answer_candidate')
            ->where('id',$getId->id)
            ->update(["comment"=>$request->note[$i]]);
            if($request->summa[$j]!=""){
                     \DB::table('answer_candidate')
                     ->where('id',$getId->id)
                     ->update(["summary"=>$request->summa[$j]]);
                     $j++;
            }
            ++$i;
        }
        // $candidate->answers()->sync($answer);
        $score=\DB::table('answer_candidate')->where('candidate_id',$candidate['id'])->get();
        $TotalScore=0;
        $countCoficient=0;
        $ScoreGrade=0;
        foreach($score as $value){
            if(Answer::find($value->answer_id)->label=="A"){
                $countCoficient+=Answer::find($value->answer_id)->score;
                $TotalScore+=Answer::find($value->answer_id)->score*1;
            }
             else if(Answer::find($value->answer_id)->label=="B"){
                $countCoficient+=Answer::find($value->answer_id)->score;
                $TotalScore+=Answer::find($value->answer_id)->score*2;
            }
            else  if(Answer::find($value->answer_id)->label=="C"){
                $countCoficient+=Answer::find($value->answer_id)->score;
                $TotalScore+=Answer::find($value->answer_id)->score*3;

            }
             else {
                $TotalScore+=Answer::find($value->answer_id)->score*0;
            }
        }
        $grade=" ";
        $select=" ";
        $ScoreGrade=$TotalScore/$countCoficient;
          if($ScoreGrade<1.5){
                  $grade="A";
                  $select="Yes";
          }else if($ScoreGrade<2.5){
                  $grade="B";
                  $select="Yes";
          }else{
              $grade="Fail";
              $select="No";
          }
          $summary=$request->summary;
          $sign=$request->sign;
          $moivation=$request->moivation;
          $cammunication=$request->cammunication;
          $responsible=$request->responsible;
          \DB::table('candidates')
          ->where('id',$candidate['id'])
          ->update(['grade' =>($grade.$sign),
                    'select'=>$select,
                    'summary'=>$summary,
                    'motivation'=>$moivation,
                    'communication'=>$cammunication,
                    'responsibility'=>$responsible
          ]);
        return redirect('/candidates');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role_id == 2){
            return redirect('candidates');
        } else {
            //
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role_id == 2){
            return redirect('candidates');
        } else {
            //
        }
    }
    // return response()->json(['return' => 'some data']);


    // public function testing() {
    //     $ngo = NGO::all();
    //     return view('pages.test', compact('ngo'));
    // }

    
    
}
