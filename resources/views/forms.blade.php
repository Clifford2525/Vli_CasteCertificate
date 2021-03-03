<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="/css/forms.css">
</head>
<body>
    <form action="/submit" method="post" enctype="multipart/form-data">
    @csrf
        <div class="layout">
            <fieldset >
                <legend >PERSONAL DETAILS:</legend><br>
            <label for="name">Applicant Name *</label>
            <input type="text" name="name" id="name" maxlength="30" placeholder="name with capital.." required autofocus>
    
            <label for="appellation">Appellation</label>
            <input type="text" name="appellation" id="appellation" placeholder="Dr/Rev/Er,etc..">
    
            <label for="suffix">Suffix</label>
            <input type="text" name="suffix" id="suffix">
    
            <label for="birthday">Date of Birth *</label>
            <input type="date" id="birthday" name="birthday" required>
    
            <label for="age">Age of Applicant *</label>
            <input type="number" name="age" id="age"  min="1" max="100" placeholder="Your age" required>
    
            <label for="gender">Gender *</label>
            <select name="gender" id="gender"  required>
                <option value='' selected='selected' disabled='disabled' >---Select Gender---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="eg:abc@gmail.com">
    
            <label for="phone">Contact No*</label>
            <input type="number" name="phone" id="phone" size="18" placeholder="Your phone number.." required>
    
            <label for="caste">Caste / Tribe*</label>
            <select id="caste" name="caste" required>
                <option value="" selected='selected' disabled='disabled'>---Select Caste--- </option>
                <option value="ST">ST</option>
                <option value="SC">SC</option>
                <option value="OBC">OBC</option>
                <option value="General">General</option>
              </select>
    
            <label for="district">Place of Birth*</label>
            <select id="district" name="district">
                <option value="" selected='selected' disabled='disabled'>---Select one--- </option>
                <option value="Aizawl">Aizawl </option>
                <option value="Mamit">Mamit </option>
                <option value="Kolosib">Kolosib</option>
                <option value="Champhai">Champhai</option>
                <option value="Serchhip">Serchhip</option>
                <option value="Lunglei">Lunglei</option>
                <option value="Lawngtlai">Lawngtlai</option>
                <option value="Saiha">Saiha</option>
                <option value="Hnahthial">Hnahthial</option>
                <option value="Khawzawl">Khawzawl</option>
                <option value="Saitual">Saitual</option>             
            </select>
     
            <label for="clan">Name of Clan *</label>
            <input type="text" name="clan" id="clan" placeholder="Sailo/Pautu/Chakma,etc.." required>
    
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation">
            
            <label for="income">Monthly Income</label>
            <input type="number" name="income" id="income">
    
            <label for="education">Education</label>
            <input type="text" name="education" id="education">

            <label for="relation_name">Relation Name *</label>
            <input type="text" name="relation_name" id="relation_name">
    
            <label for="relation_type">Relation Type *</label>
            <select name="relation_type" id="relation_type">
               <option  selected='selected' disabled='disabled' required>---Select relation--</option>
               <option value="s/o">s/o</option>
               <option value="d/o">d/o</option>
               <option value="w/o">w/o</option>
               <option value="h/o">h/o</option>
           </select><br><br>
           

        </fieldset>
        </div>

        <div class="layout2">
            <fieldset>
                
                <legend>PRESENT ADDRESS:</legend><br>
                <label for="door" >Door Number *</label>
                <input type="text" id="door" name="door" placeholder="eg: T-38/2" required>

                <label for="locality1" >Sub locality 1 * </label>
                <input type="text" id="locality1" name="locality1" required>

                <label for="locality2" >Sub locality 2 </label>
                <input type="text" id="locality2" name="locality2">

                <label for="location" >Location</label>
                <input type="text" id="location" name="location">

                <label for="sub_dist" >Sub District * </label>
                <input type="text" id="sub_dist" name="sub_dist" required>

                <label for="dist" >District </label>
                <input type="text" id="dist" name="dist">

                <label for="state" >State  </label>
                <input type="text" id="state" name="state">

                <label for="pin" >Pin code * </label>
                <input type="number" id="pin" name="pin" size="6" placeholder="6-digit PinCode" required>

                <label for="country" >Country  </label>
                <input type="text" id="country" name="country">

                <label for="police" >Police Station *</label>
                <input type="text" id="police" name="police" required>

                <label for="post" >Post office *</label>
                <input type="text" id="post" name="post" required><br><br>

            </fieldset>
        </div>

        <div class="layout2">
            <fieldset>
                
                <legend>PERMANENT ADDRESS:</legend><br>
                <label for="pdoor" >Door Number *</label>
                <input type="text" id="pdoor" name="pdoor" placeholder="eg: T-38/2" required>

                <label for="plocality1" >Sub locality 1 * </label>
                <input type="text" id="plocality1" name="plocality1" required>

                <label for="plocality2" >Sub locality 2 </label>
                <input type="text" id="plocality2" name="plocality2">

                <label for="plocation" >Location</label>
                <input type="text" id="plocation" name="plocation">

                <label for="psub_dist" >Sub District * </label>
                <input type="text" id="psub_dist" name="psub_dist" required>

                <label for="pdist" >District </label>
                <input type="text" id="pdist" name="pdist">

                <label for="pstate" >State  </label>
                <input type="text" id="pstate" name="pstate">

                <label for="ppin" >Pin code * </label>
                <input type="number" id="ppin" name="ppin" size="6" placeholder="6-digit PinCode" required>

                <label for="pcountry" >Country  </label>
                <input type="text" id="pcountry" name="pcountry">

                <label for="ppolice" >Police Station *</label>
                <input type="text" id="ppolice" name="ppolice" required>

                <label for="ppost" >Post office *</label>
                <input type="text" id="ppost" name="ppost" required><br><br>

            </fieldset>
        </div>


        <div class="layout3">
            <fieldset>
                <legend>MISCELLANEOUS:</legend>
                <label for="purpose">Purpose of caste certificate *</label>
                <textarea name="purpose" id="purpose" cols="40" rows="4" required></textarea><br><br><br>

                
                    <label for="">List of Scanned supporting Documents *</label><br>
                    <label for="identity_proof">1.Identity Proof</label>
                    <input type="file" id="identity_proof" name="identity_proof" required><br>
                    <label for="address_proof">2.Address Proof</label>
                    <input type="file" id="address_proof" name="address_proof" required><br>
                    <label for="passport_photo">3.Passport Photo</label>
                    <input type="file" id="passport_photo" name="passport_photo" required><br><br>
                

                <input type="checkbox" id="check" name="check" required>
                <label for="check">I hereby declare that all the documents attached are verified with originals</label><br><br>
 
                                
            </fieldset>
        </div>
        <div class="button">
            <form action="/submit" method="post" enctype="multipart/form-data">
            @csrf
                <input type="submit" value="SUBMIT">
            </form>
        </div>


    </form>
    
</body>
</html>