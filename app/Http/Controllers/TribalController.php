<?php

namespace App\Http\Controllers;

use App\tribal;
use Illuminate\Http\Request;
use Illuminate\Suppport\Facades\Response;
use App\Mail\Statusmail;
use App\Mail\Submitmail;

use Illuminate\Support\Facades\Mail;
use PDF;

class TribalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Tribal::All();
        return view ('applicants') -> with('groups',$groups);
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
        if($request -> hasFile('identity_proof')){
            $filenameWithExt = $request -> file('identity_proof') -> getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request -> file('identity_proof') ->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request -> file('identity_proof') ->storeAs('public/documents',$fileNameToStore);            
        }
        else{
            $fileNameToStore ='noimage.jpg';
        }

        if($request -> hasfile('address_proof')){
            $filenameWithExt = $request -> file('address_proof') -> getclientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request -> file('address_proof') ->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $request -> file('address_proof') ->storeAs('public/documents',$fileNameToStore2);
        }
        else{
            $fileNameToStore2 ='noimage.jpg';
        }

        if($request -> hasfile('passport_photo')){
            $filenameWithExt = $request -> file('passport_photo') -> getclientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request -> file('passport_photo') ->getClientOriginalExtension();
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            $path = $request -> file('passport_photo') ->storeAs('public/documents',$fileNameToStore3);
        }
        else{
            $fileNameToStore3  ='noimage.jpg';
        }

        $data = new tribal();
        $data -> date = date('d/m/Y');
        $data -> reg_no = "CERTCC".now()->timestamp;
        $data -> name = request('name');
        $data -> appellation = request('appellation');
        $data -> suffix = request('suffix');
        $data -> birthday = request('birthday');
        $data -> age = request('age');
        $data -> gender = request('gender');
        $data -> email = request('email');
        $data -> phone = request('phone');
        $data -> caste = request('caste');
        $data -> district = request('district');
        $data -> clan = request('clan');
        $data -> occupation = request('occupation');
        $data -> income = request('income');
        $data -> education = request('education');
        $data -> relation_name = request('relation_name');
        $data -> relation_type = request('relation_type');

        $data -> door = request('door');
        $data -> locality1 = request('locality1');
        $data -> locality2 = request('locality2');
        $data -> location= request('location');
        $data -> sub_dist = request('sub_dist');
        $data -> dist = request('dist');
        $data -> state = request('state');
        $data -> pin = request('pin');
        $data -> country = request('country');
        $data -> police = request('police');
        $data -> post = request('post');

        $data -> pdoor = request('pdoor');
        $data -> plocality1 = request('plocality1');
        $data -> plocality2 = request('plocality2');
        $data -> plocation = request('plocation');
        $data -> psub_dist = request('psub_dist');
        $data -> pdist = request('pdist');
        $data -> pstate = request('pstate');
        $data -> ppin = request('ppin');
        $data -> pcountry = request('pcountry');
        $data -> ppolice = request('ppolice');
        $data -> ppost = request('ppost');

        $data -> purpose = request('purpose');
        $data -> identity_proof = $fileNameToStore;
        $data -> address_proof = $fileNameToStore2;
        $data -> passport_photo = $fileNameToStore3;
        $data -> check = request('check');

        $data -> save();
        Mail::to($data['email']) -> send(new submitmail($data));
        
        return redirect('home') -> with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tribal  $tribal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $single = Tribal::find($id);
        return view('applicantinfo') -> with('single',$single);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tribal  $tribal
     * @return \Illuminate\Http\Response
     */
    public function edit(tribal $tribal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tribal  $tribal
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, tribal $tribal)
    // {
    //     $single = Tribal :: find($id);
    //     if($request -> has('forward'))
    //     {
    //         $single -> status = 'forwarded';
    //         $single -> save();
            
    //         return redirect('/dc') -> with('sucess','Successfully Forwaraded Reg.No.');
    //     }
    //     else if( $request -> has('sign'))
    //     {
    //         $single -> status = 'signed';
    //         $single -> save();
            
    //         return redirect('/dc') -> with('sucess','Successfully Signed Reg.No.');
    //     }
    //     else()
    //     {

    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tribal  $tribal
     * @return \Illuminate\Http\Response
     */
    public function destroy(tribal $tribal)
    {
        //
    }
    public function download($id)
    {
        $single = Tribal::find($id);
        $pdf = PDF::loadView('download',compact('single'));
        $filename = $single->id;
        // return $pdf->download($filename.'.pdf');
        return $pdf->stream();
    }
    public function dload($id)
    {
        $single = Tribal::find($id);
        $pdf = PDF::loadView('dloadsubmit',compact('single'));
        $filename = $single->id;
        // return $pdf->download($filename.'.pdf');
        return $pdf->stream();
    }

    // public function rejStore($id){
    //     $single=Tribal::find($id);
    //     Mail::to($single['email']) -> send(new statusmail($single));

    //     return redirect('/tribal') -> with('success','Successfully rejected');
    // }
    // public function submitStore($id){
    //     $single=Tribal::find($id);
    //     Mail::to($single['email']) -> send(new submitmail($single));

    //     return redirect('/home') -> with('success','Successfully Submitted');
    // }

}
