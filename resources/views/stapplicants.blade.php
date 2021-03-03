<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

        <th>Name</th>
        <th>Appelation</th>
        <th>Suffix</th>
        <th>Birthday</th>
        <th>Age</th>



        @foreach($groups as $group)
        <tr>
            
            <td><a href='/projectst/{{$group->id}}'>{{$group -> id}}</a></td>
            <td>{{$group -> name}}</td>
            <td>{{$group -> appelation}}</td>
            <td>{{$group -> suffix}}</td>
            <td>{{$group -> birthday}}</td>
            <td>{{$group -> age}}</td>





        </tr>
        @endforeach
    </table>

</body>
</html>