<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clifford</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f2f4f8;
                /* color:orange;
                font-family: 'Nunito', sans-serif; */
                /* font-weight: 200; */
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .button h2 {
                /* color:#52a7cc; */
                font-family:  sans-serif;
                font-size: 60px;
                margin-bottom: 30px;
                margin-top:300px;
                margin-left:600px;
                margin-right:10px;
                float:right;
                color:white;
                box-shadow: 3px 3px 5px #90a4c9;
                padding:20px 60px;
                text-align:left;
                background-color:#1e6f93;
            }

            }
            .button p{
                color:orange;
                font-family: sans-serif;
                font-size:35px;
                float:right;
                /* font-family: poppins; */

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .button{
                position: absolute;
                font-family: sans-serif;
                top: 50%;
                left: 50%;
                transform: translate(-50% ,-50%);
                color: #b2b6bb;
                text-align: center;
                font-size:35px;
                
            }
            .button a{
                text-decoration: none;
                /* border: 2px solid #1e6f93; */
                box-shadow: 3px 3px 5px #90a4c9;
                border-radius:30px;
                width:10%;
                font-size: 20px;
                padding: 10px 35px;
                color: #fff;
                display: inline-block;
                margin-top: 5%;
                font-family: sans-serif;
                text-transform: uppercase;
                background: #52a7cc;
                background-color: #52a7cc;
            }
            .button a:hover{
                background: #1e6f93;
                background-color: #1e6f93;
                transform: .9s;
                color: #fff;
            }
            img{
                width:5%;
                height:auto;
                position:relative;
                z-index:0;
            }

        </style>
    </head>
    <body>
        <div class='logo'>
            <img src="css/image/msegs logo.png" alt="msegs">
        </div>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="/checkdload">Download</a>
            </div>


            @if (Route::has('login'))
                <div class="button">
                    <h2>Apply for <br> Caste Certificate</h2>
                    <!-- <p>Apply for Caste Certificate</p> -->
                    @auth 
                        <a href="{{ url('/home') }}">login</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">sign in</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- <div class="check">
                <form action="/search" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="text" id="check" name="check" required> <br>
                    <input type="submit" value="CHECK">
                </form>
            </div> -->

        </div>
    </body>
</html>
