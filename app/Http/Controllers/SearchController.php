<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Search extends Controller
{
    function index()
    {
     return view('/dloadpage');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('tribal')
         ->where('reg_no', 'like', '%'.$query.'%')
         ->orderBy('reg_no', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('tribal')
         ->orderBy('reg_no', 'desc')
         ->get();
      }
      //dd($data);
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->Reg_no.'</td>
        <td>'.$row->status.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}