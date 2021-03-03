<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/certificate.css">
    <title>Certificate</title>
    <style>
        *{
            margin-left: 14px;
            margin-right: 14px;
            border:4px black;
            /* background-image: {{public_path('css/image/ashok.jpg')}}; */
        }
        img{
            width:30px;
            height:40px;
        }
        .layout{
            font-family: normal, serif;
            font:bold;
            /* line-height:2; */

        }
        .head{
            text-align:center;
        }
        .date{
            text-align:right;
        }
        .subhead{
            text-align:center;
            font-weight:bold;
            text-decoration:underline;
        }
        .main{
            text-indent: 5em;
            border-bottom: 2px underline #333;
            line-height:2.3;

        }
        .rules{
            line-height:2.3;

        }
        .note{
            text-align:left;
            /* float:left */
            font-size:10px;
            margin-top:10%;

        }
        .end{
            text-indent: 2.5em;
            line-height:2;

        }
        .left{
            width:50%;Text-align:left;float:left;
        }
        .right{
            Text-align:left;Width:30%;float:right;
        }
        p{
            display: inline;
            padding-right: 80px;
            padding-left: 80px;
            border-bottom: 1px solid #888;
        }

        #back{
            position:relative;
            top:28%;
            /* left:30%; */
            text-align:center;
            opacity:0.1;
            z-index:0;
            
        }
        .gov{
            position:relative;
            top:28%;
            /* left:10%; */
            text-align:center;
            opacity:0.2;
            z-index:0;
            font-family:verdana ,sans-serif;
            font-size:40px;

        }
        #front{
            position:absolute;
            top:0;
            
            z-index:1;
        }

    </style>
</head>
<body>
    <div class='layout'>
        <div id="back">
    <img src="{{public_path('css/image/ashok.jpg')}}" style="width:12rem;height:auto;">
    <!-- <h2 style='font-family:sans-serif;font-size:30px'>GOVERNMENT OF MIZORAM</h2> -->
             </div>
             <div class='gov'>
             Government of Mizoram
             </div>
             <div id="front">
        <fieldset>
            <div class='head'>
                OFFICE OF THE DEPUTY COMISSIONER <br>
                AIZAWL DISTRICT : AIZAWL <br>
                (JUDICIAL BRANCH)<br><br>
            </div>
            <div class='date'>
                Regn.No.{{$single -> reg_no}}<br>
                Dated Aizawl, the September 12, 2012 <br><br><br>
            </div>
            <div class='subhead'>
                SCHEDULED TRIBE/CASTE CERTIFICATE <br><br>
            </div>
            <div class='main'>
                This is to certify that Shri.<p>{{$single -> name}}</p><br>
                Son of <p style='padding-right:35%;padding-left:35%;'>{{$single -> relation_name}}</p><br>
                of Village/Town <p style='padding-right:32%;padding-left:32%;'>{{$single -> location}}</p><br>
                in District <p style='padding-right:13%;padding-left:13%;'>{{$single -> dist}}
                </p> belongs to <p style='padding-right:13%;padding-left:13%;'>{{$single -> caste}}</p><br>
                which is recognized as Scheduled Tribe under:-
                
            </div>
            <div class='rules'>
                (1)<b><b>The Constitution(Union territories) Scheduled Castes Order, 1951;<br>
                (2)<b> The Constitution(Union territories) Scheduled Tribes Order, 1951;<br>
                (3)<b> The Constitution(Scheduled Tribes) Orders (Second) Amendment Act, 1991;<br>
                (4)<b> The Scheduled Castes and Scheduled Tribes Orders (Amendment) Act, 2002;and<br>
                (5)<b> The Constitution(Scheduled Tribes and Scheduled Castes) Orders (Amendment) <b style='margin-left:38px'>Act, 2002. 
            </div>
            <div class='end'>
                Shri.<p style='padding-right:8%;padding-left:8%;'>{{$single -> name}}</p>is an Ordinary resident of Village/Town <br>
                <p style='padding-right:10%;padding-left:10%;'>{{$single -> location}}</p>of
                <p style='padding-right:8%;padding-left:8%;'>{{$single -> dist}}</p>District of Mizoram. <br><br>
            </div>
            <div class='left'>
                Place:  <br>
                Date:    
                
                <br><br>
            </div>
            <div class='right'>
                Signature:<br>
                Name: <br><br><br>
            </div>
            <div class='note'>
                NOTE: <br>
                1.This order is originally signed and therefore needs no physical signature.<br>
                2.Authenticity of this order can be verified from https://edistrict.mizoram.gov.in. This order is legally valid as per the Information Technology Act 2000 and its subsequent Amendments.<br>
                3.Tempering of this order will attract Penal Action.
            </div>
        </fieldset>
                </div>  
    </div>
</body>
</html>