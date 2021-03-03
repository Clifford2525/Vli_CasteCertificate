<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/forms.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>APPLICANT INFORMATION</title>
    <style>
        
        table,th,td{
            border: 1px solid #dee0e0;
            border-collapse: collapse;
            text-align:left;
            margin-left:16.2%;            
            font-family: normal, sans-serif;
            font-size: small;
            background-color: white;                
        }
        th {
            padding: 8px 20px;
        }
        td {
            padding: 8px 10px;
        }
        .butt {
            /* width: 90%; */
            margin-top: 40px;
            margin-left: 40px;    
            /* display:inline-block; */

        }
        form{
            display:inline;
        }
        
    </style>
</head>
<body>
    <table style="width:67.5%">
    <!-- <tr>
        <th colspan="4" style='color:#ccc;text-align:center;font-size:large;' >APPLICATION FOR OBC/SC/ST CERTIFICATE</th>
    </tr> -->
    <tr>
        <th colspan="4" style='color:white;background-color:#52a7cc'>PERSONAL DETAILS :</th>
    </tr>
    <tr>
        <th style="width:100px">Name</th>
        <td style="width:250px">{{$single -> name}}</td>
        <th style="width:100px">Appellation</th>
        <td style="width:250px">{{$single -> appellation}}</td>
    </tr>
    <tr>
        <th>Suffix</th>
        <td>{{$single -> suffix}}</td>
        <th>D.O.B</th>
        <td>{{$single -> birthday}}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{$single -> age}}</td>
        <th>Gender</th>
        <td> {{$single -> gender}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$single -> email}}</td>
        <th>Contact No</th>
        <td>{{$single -> phone}}</td>
    </tr>
    <tr>
        <th>Caste / Tribe</th>
        <td>{{$single -> caste}}</td>
        <th>Place of Birth</th>
        <td>{{$single -> district}}</td>
    </tr>
    <tr>
        <th>Name of Clan</th>
        <td>{{$single -> clan}}</td>
        <th>Occupation</th>
        <td> {{$single -> occupation}}</td>
    </tr>
    <tr>
        <th>Monthly Income</th>
        <td>{{$single -> income}}</td>
        <th>Education</th>
        <td>{{$single -> education}}</td>
    </tr>
    <tr>
        <th>Relation Name</th>
        <td>{{$single -> relation_name}}</td>
        <th>Relation Type</th>
        <td>{{$single -> relation_type}}</td>
    </tr>
    <tr>
        <th colspan="4" style='color:white;background-color:#52a7cc'>PRESENT ADDRESS :</th>
    </tr>
    <tr>
        <th>Door number</th>
        <td>{{$single -> door}}</td>
        <th>Sub Locality 1</th>
        <td>{{$single -> locality1}}</td>
    </tr>
    <tr>
        <th>Sub Locality 2</th>
        <td> {{$single -> locality2}}</td>
        <th>Location</th>
        <td>{{$single -> location}}</td>
    </tr>

    <tr>
        <th>Sub District</th>
        <td>{{$single -> sub_dist}}</td>
        <th>District</th>
        <td>{{$single -> dist}}</td>
    </tr>
    <tr>
        <th>State</th>
        <td>{{$single -> state}}</td>
        <th>Pin Code</th>
        <td>{{$single -> pin}}</td>
    </tr>
    <tr>
        <th>Country</th>
        <td> {{$single -> country}}</td>
        <th>Police Station</th>
        <td>{{$single -> police}}</td>
    </tr>
    <tr>
        <th>Post Office</th>
        <td>{{$single -> post}}</td>
        <td></td><td></td>
    </tr>
    

    <tr>
        <th colspan="4" style='color:white;background-color:#52a7cc'>PERMANENT ADDRESS :</th>
    </tr>
    <tr>
        <th>Door number</th>
        <td>{{$single -> pdoor}}</td>
        <th>Sub Locality 1</th>
        <td>{{$single -> plocality1}}</td>
    </tr>
    <tr>
        <th>Sub Locality 2</th>
        <td> {{$single -> plocality2}}</td>
        <th>Location</th>
        <td>{{$single -> plocation}}</td>
    </tr>
    <tr>
        <th>Sub District</th>
        <td>{{$single -> psub_dist}}</td>
        <th>District</th>
        <td>{{$single -> pdist}}</td>
    </tr>
    <tr>
        <th>State</th>
        <td>{{$single -> pstate}}</td>
        <th>Pin Code</th>
        <td>{{$single -> ppin}}</td>
    </tr>
    <tr>
        <th>Country</th>
        <td> {{$single -> pcountry}}</td>
        <th>Police Station</th>
        <td>{{$single -> police}}</td>
    </tr>
    <tr>
        <th>Post Office</th>
        <td>{{$single -> ppost}}</td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <th colspan="4" style='color:white;background-color:#52a7cc'>MISCELLANEOUS :</th>
    </tr>
    <tr>
        <th>Purpose</th>
        <td colspan="3">{{$single -> purpose}}</td>
    </tr>
    <tr>
        <th colspan="3">1.Identity Proof</th>
        <td ><a href='/storage/documents/{{$single -> identity_proof}}' target='blank' >Click here to view</a></td>
        
    </tr>
    <tr>
        <th colspan="3">2.Address Proof</th>
        <td ><a href='/storage/documents/{{$single -> address_proof}}' target='blank'>Click here to view</a></td>
    </tr>
    <tr>
        <th colspan="3">3.Passport Photo</th>
        <td><a href='/storage/documents/{{$single -> passport_photo}}' target='blank'>Click here to view</a></td>
    </tr>
          
    </table>

    <form action="/submit/{{$single->id}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="layout3">
            <fieldset >
                <legend >NOTESHEET</legend><br>
                <label for="forwarder_comments">Comments to be enclosed with the list forwarded by the forwarder</label>
                <textarea name="forwarder_comments" id="forwarder_comments" cols="40" rows="4" required></textarea>
                <br>
                <label for="due_date">Due date for decision on application</label>
                <input type="date" name="due_date" id="due_date" required><br>
    
                <label for="target_date">Target Date</label>
                <input type="date" name="target_date" id="target_date" required><br>
    
                <label for="forwarder_remarks">Remarks from Forwarder</label>
                <textarea name="forwarder_remarks" id="forwarder_remarks" cols="40" rows="4" required></textarea>
            </fieldset>
            
            <div class='butt' style="Text-align:left;Width:50%;float:right">
                <input type="submit" value="Forward" > 
            </div>
        </div>
    </form>

        <!-- <div class="button"> 
            <form action="/submit/{{$single -> id}}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="submit" value="Submit">
            </form>
        </div> -->
        <div class="butt" style="width:35%;Text-align:right;float:right;background-color:#f2f4f8">
            <form action="/reject/{{$single -> id}}" method="get" enctype="multipart/form-data">
            @csrf
                <input type="submit" value="Reject" style='background-color:#f2f4f8;color:#52a7cc;border:2px solid #52a7cc' >
                
            </form>
            <!-- <form action="/forward/{{$single -> id}}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="submit" value="Forward" >
            </form> -->
        </div>

    </form>
    <!-- <div>
        <form action="">
           <div style="width:50%;Text-align:center;float:left;">
           <b>First Div</b></div></form>
           <form action="">
           <div style="Text-align:right;Width:50%;float:right">
           <b>Second Div</b></div></form>
</div> -->
</body>
</html>