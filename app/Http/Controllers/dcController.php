<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\tribal;
use App\Mail\Statusmail;
use App\Mail\Approvemail;


class dcController extends Controller
{
    public function index()
    {
        $groups=Tribal::All();
        return view ('dc') -> with('groups',$groups);
    }

    public function show($id)
    {
        
        $single = Tribal::find($id);
        return view('dcview') -> with('single',$single);
    }
    public function store(Request $request, $id)
    {
        $data = Tribal::find($id);
        $data -> forwarder_comments = request('forwarder_comments');
        $data -> due_date = request('due_date');
        $data -> target_date = request('target_date');
        $data -> forwarder_remarks = request('forwarder_remarks');
        $data -> status = "forwarded";
        $data -> save();

        return redirect('tribal') -> with('success','Data Added');

    }

    public function rejStore($id)
    {
        $data = Tribal::find($id);
        $data -> status = "rejected";
        $data -> save();
        Mail::to($data['email']) -> send(new statusmail($data));
        return redirect('/tribal') -> with('success','successfully rejected');

    }
    public function update(Request $request,$id)
    {
        $data = Tribal :: find($id);
        $data->status = "approved";
        $data->save();
        Mail::to($data['email']) -> send(new approvemail($data));
        return redirect('/dc');
        // if($request -> has('forward'))
        // {
        //     $data -> status = 'forwarded';
        //     $data -> save();
        //     return redirect('/tribal') -> with('success','successfully forwarded');
        // }
        // else if($request -> has('sign'))
        // {
        //     $data -> status = 'signed';
        //     $data -> save();
        //     return redirect('/dc') -> with('success','successfully signed');
        // }
        // else if($request -> has('update'))
        // {
        //     $data -> status = 'updated';
        //     $data -> save();
        //     return redirect('/dc') -> with('success','successfully updated');
        // }
        // else if($request -> has('approve'))
        // {
        //     $data -> status = 'approved';
        //     $data -> save();
        //     return redirect('/dc') -> with('success','successfully approved');
        // }
        // else
        // {
        //     $data -> status = 'rejected';
        //     $data -> save();
        // }
    }
    public function dload(Request $request, $id)
    {
        $person = Tribal :: find($id);
        
    }
}