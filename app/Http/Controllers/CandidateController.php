<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngo;
use App\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ngo = Ngo::all();
        return view('pages.createCandidate',compact('ngo',$ngo));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        if( $request->hasFile('inputFile')){
            $fileName=$request->file('inputFile')->getClientOriginalName();
            $request->file('inputFile')->storeAs('public/img',$fileName);
              
              // $id = \Auth::user()->id;
              // //dd($id);
            //   $user = \Auth::user();
            //   $user->profile = $fileName;
            //   $user->save();
              

        }else{
            return "not sucess";
        }

        return ("you are sucess");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
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
        //
    }
}
