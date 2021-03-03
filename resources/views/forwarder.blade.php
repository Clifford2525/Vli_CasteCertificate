<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 2px solid #dee0e0;
            border-collapse: collapse;
            text-align:left;
        }
        th, td {
            padding: 8px;
        }
    </style>
</head>
<body>

    <table style="width:100%">
        <th>Sl.No</th>
        <th>ID</th>
        <th>Name</th>
        <!-- <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone_No</th> -->
        <th>Date</th>
        <th>Status</th>
        <th>Download</th>

        @foreach($groups as $group)
        <tr>
            <td>{{$group -> id}}</td>
            <td><a href='/tribal/{{$group->id}}'>{{$group -> reg_no}}</a></td>
            <td>{{$group -> name}}</td>
            <!-- <td>{{$group -> age}}</td>
            <td>{{$group -> gender}}</td>
            <td>{{$group -> email}}</td>
            <td>{{$group -> phone}}</td> -->
            <td>{{$group -> time}}</td>
            <td>{{$group -> status}}</td>
            @if(false)
            <td><a href=#>Download now</a></td>
            @else
            <td>Download la theih loh</td>
            @endif


        </tr>
        @endforeach
    </table>

</body>
</html>