<?php

namespace App\Http\Controllers;
use App\tribal;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function image(request $request)
    {
        $data = new tribal();
        if($request -> hasFile('document'))
        {
            echo("FOUND!!!");
            // $filenameWithExt = $request -> file('document') -> getclientOriginalName();
            // $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // $text = $request -> file('document') ->getClientOriginalExtension();
            // $fileNameToStore = $filename.'_'.time().'.'.$extention;
            // $path = $request -> file('document') ->StoreAs('/documents',$fileNameToStore);
            // $data -> identity_proof = $fileNameToStore;
            // $data ->  save();
        }
        else{
            echo('NOTHING');
        }
        
    }
    public function index()
    {
        return view('image');
    }
}