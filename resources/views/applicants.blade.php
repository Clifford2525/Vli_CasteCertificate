@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        table,th,td{
            border: 2px solid #dee0e0;
            border-collapse: collapse;
            text-align:left;
            background-color:white;
        }
        th, td {
            padding: 8px;
        }
        /* input[type=text] {
  width: 30%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 10px 20px 10px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  float:right;
} */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: right;
  width: 30%;
  background: #f1f1f1;
}
form.example button {
  float: right;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}
    </style>
</head>
@section('content')
<body>
    <!-- <div>
        <form class="example" action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> -->
    <table style="width:100%">
        <th>Sl.no.</th>
        <th>Application ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_No</th>
        <th>Date</th>
        <th>Status</th>
        <!-- <th>Download</th> -->

        @foreach($groups as $group)
        <tr>
            <td>{{$group -> id}}</td>
            <td><a href='/tribal/{{$group->id}}'>{{$group -> reg_no}}</a></td>
            <td>{{$group -> name}}</td>
            <td>{{$group -> email}}</td>
            <td>{{$group -> phone}}</td>
            <td>{{$group -> date}}</td>
            <td>{{$group -> status}}</td>
            <!-- @if(false)
            <td><a href=#>Download now</a></td>
            @else
            <td>Download la theih loh</td>
            @endif -->


        </tr>
        @endforeach
    </table>

</body>
</html>
@endsection('content')