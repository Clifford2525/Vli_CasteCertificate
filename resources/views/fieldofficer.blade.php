<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="/css/simple.css">
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
        th, td {
            padding: 8px 40px;
        }
        th {
            width: 120px;           
        }

        .butt {
            width: 31%;
            margin-top: 20px;
            margin-left: 44%;
            
        }
        
    </style>
</head>
<body>
    <table style="width:67.5%">
    <tr>
        <th colspan="4" style='color:#52a7cc;text-align:center;font-size:large;' >APPLICATION FOR OBC/SC/ST CERTIFICATE</th>
    </tr>
    <tr>
        <th colspan="4" style='color:#52a7cc'>PERSONAL DETAILS:</th>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{$single -> name}}</td>
        <th>Appellation</th>
        <td>{{$single -> appellation}}</td>
    </tr>
    <tr>
        <th>Suffix</th>
        <td>{{$single -> suffix}}</td>
        <th>DoB</th>
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
        <th colspan="4" style='color:#52a7cc'>PRESENT ADDRESS:</th>
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
        <th colspan="4" style='color:#52a7cc'>PERMANENT ADDRESS:</th>
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
        <th colspan="4" style='color:#52a7cc'>MISCELLANEOUS:</th>
    </tr>
    <tr>
        <th>Purpose</th>
        <td colspan="3">{{$single -> purpose}}</td>
    </tr>
    <tr>
        <th>1.Identity Proof</th>
        <td colspan="3"><a href='/storage/documents/{{$single -> identity_proof}}' target='blank' >Click here to view</a></td>
        
    </tr>
    <tr>
        <th>2.Address Proof</th>
        <td colspan="3"><a href='/storage/documents/{{$single -> address_proof}}' target='blank'>Click here to view</a></td>
    </tr>
    <tr>
        <th>3.Passport Photo</th>
        <td colspan="3"><a href='/storage/documents/{{$single -> passport_photo}}' target='blank'>Click here to view</a></td>
    </tr>
    <tr>
        <th colspan="3">NoteSheet_No.</th>
        <td>{{$single -> notesheet_no}}</td>       
    </tr>
    <tr>
        <th colspan="3">Comments to be enclosed with the list forwarded by the forwarder</th>
        <td>{{$single -> forwarder_comments}}</td>
    </tr>
    <tr>
        <th colspan="3">Due date for decision on application</th>
        <td>{{$single -> due_date}}</td>
        
    </tr>
    <tr>
        <th colspan="3">Target Date</th>
        <td>{{$single -> target_date}}</td>
    </tr>
    <tr>
        <th colspan="3">Remarks from Forwarder</th>
        <td>{{$single -> forwarder_remarks}}</td>
    </tr>
          
    </table>

    <div class="butt">
            <form method="get" action="/reject/{{$single -> id}}">
            @csrf                
                <input type="Submit" value="Update" style='background-color:#ef7239;margin-right:50px' >
            </form>
    </div>
</body>
</html>