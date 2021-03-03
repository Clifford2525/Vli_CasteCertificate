<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgement</title>
    <style>
        *{
            margin-left: 20px;
            margin-right: 20px;
            border:1px black;
        }
        .layout{
            font-family: normal, sans-serif;
            line-height:1.8;
        }
        .title{
            text-align:center;
            font-weight:bold;
            text-decoration:underline;
        }
        .body{
            text-indent: 5em;
            border-bottom: 2px underline #333;
        }
        .time{

        }
        .sign{
            text-align:right;
        }
        p{
            display: inline;
            padding-right: 20px;
            padding-left: 20px;
            border-bottom: 1px solid #888;
            font-weight:bold;
        }

    </style>
</head>
<body>
    <div class='layout'>
        <fieldset>
            <div class='title'>
                <u>Acknowledgement</u> <br><br><br><br>
            </div>
            <div class='body'>
                This is to acknowledge the receipt <p>Caste Certificate</p>
                with Application No <p>{{$single -> reg_no}}</p>
                dated on <p>{{$single -> date}}</p>to the <p>SDO</p>
                has been <p>SUBMITTED</p><br><br><br>
            </div>
            <div class='time'>
                   Place:Aizawl<br>
                   Date:{{$single -> date}}              
            </div>
            <div class='sign'>
                Authority Signature
            </div>
        </fieldset>
    </div>
</body>
</html>