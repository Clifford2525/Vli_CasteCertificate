<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANT INFORMATION</title>
</head>
<body>
    <table>
    
    <tr>
        <td>Name</td>
        <td>{{$single -> name}}</td>

        <td>Appelation</td>
        <td>{{$single -> appelation}}</td>

        <td>Suffix</td>
        <td>{{$single -> suffix}}</td>

        <td>Age</td>
        <td>{{$single -> age}}</td>

        <td>Birthday</td>
        <td>{{$single -> birthday}}</td>

    </tr>
           
    </table>
</body>
</html>