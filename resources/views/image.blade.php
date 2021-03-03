<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="/css/forms.css">
</head>
<body>
<form action="/submit" method="post" enctype="multipart/form-data">
    @csrf
        <div class="layout">
            <label for="document">1.Identity Proof</label>
            <input type="file" id="document" name="document"  required><br>
            
        </div>
        
        <div class="button">
            <input type="submit" value="Submit">
        </div>


    </form>
</body>
</html>