<?php

namespace App\Http\Controllers;

use App\projectst;
use Illuminate\Http\Request;

class ProjectstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Projectst::All();
        return view ('stapplicants') -> with('groups',$groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new projectst();
        // $data -> name = request('name');
        // $data -> appelation = request('appelation');
        // $data -> suffix = request('suffix');
        // $data -> birthday = request('birthday');
        // $data -> age = request('age');
        if($request -> hasFile('identity_proof')){
            $filenameWithExt = $request -> file('identity_proof') -> getclientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $text = $request -> file('identity_proof') ->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            $path = $request -> file('identity_proof') ->StoreAs('/documents',$fileNameToStore);
            $data -> name = $fileNameToStore;
             $data -> save();
        }
        else{
            echo("NOT FOUND!!!");
        }

        // $data -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectst  $projectst
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Projectst::find($id);
        return view('stapplicantinfo') -> with('single',$single);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectst  $projectst
     * @return \Illuminate\Http\Response
     */
    public function edit(projectst $projectst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectst  $projectst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectst $projectst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectst  $projectst
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectst $projectst)
    {
        //
    }
}
