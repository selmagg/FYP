<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

 <style>
     * {
 padding: 0px;
 margin: 0px;
 box-sizing: border-box;
}

html {
 font-size: 62.5%;
 height:100%;
 min-height:100%;

}

body {
 font-family: system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
 line-height: 1;
 font-weight: 400;
 color: #555;
 font-size: 1.8rem;
 background-color: #EFEFEF;
 height:100%;
 min-height:100%;
}


/* colour of unvisited link */
/* colour of visited link */
a:link, a:visited{
  color: white;
  text-decoration: none;
}

/* colour of mouse over link */
a:hover {
  color: white;
  border-bottom: 2.5px solid yellow;
  text-decoration: none;
}

/* colour of selected link */
a:active {
  color: black;
  background-color: yellow;
  text-decoration: none;
}
header {
 font-size: 1.6rem;
 text-align: right;
 padding: 2.2rem;
 background: #85B6EF;
 color: #FFFFFF;
 margin-top: -40px;
}

.container {
 max-width: 130rem;
 background-color: white;
 margin: 0 auto;
 width: 60%;
 min-width: 75%;
 margin-left: 20rem;
 position: absolute;
 height:60%;
 min-height:60%;
}

.padding {
 padding: 3.6rem;
}

.text-heading {
 font-size: 2.6rem;
 margin-bottom: 2rem;
 margin-left:0rem;
 margin-top: -2rem;
 color: #2A2A2A;
 font-weight: 600;
 width: 800px;

}

.text-body {
 display: grid;
 gap: 3.6rem;
 margin-bottom: 3.8rem;
 margin-left: 3rem;
 margin-top: -1.5rem;
 color: #2A2A2A;
 width: 800px;
 font-size: 90%;
}

.header-logo {
  width:7%;
  min-width: 100px; /* stops logo from resizing */
  height: 123px;
  position: relative;
  top: 10px;
  left: 200px;
  background-size: contain;
  margin-bottom: -80px;
  font-size: 40px;
  font-family: Arial;
  font-style: italic;
}

a.home-icon {
    margin-right: 200px;
}

button, .login-button, .orange-button {
 font-family: 'Rubik', sans-serif;
 font-size: 1.5rem;
 color: #FFFFFF;
 font-weight: 600;
 padding: 1rem;
 padding-right: 2rem;
 padding-left: 2rem;
 display: inline-block;
 margin-top: -3rem;
 margin-right: 1rem;
 border: solid;
 border-radius: 15px 15px 15px 15px;
 cursor:pointer;
 position: relative;
 left: 380px;
 box-shadow: 2.5px 5px #888888;
}

.login-button {
    border-color: #82C30A;
    background-color: #82C30A;
}

.orange-button {
    border-color: #EADF0A;
    background-color: #EADF0A;
}

.login-button:hover {
 font-style: italic;
 background-color: #75AE0A;
 border-color: #75AE0A;
}

.orange-button:hover {
 font-style: italic;
 background-color: #DBD00B;
 border-color: #DBD00B;
}

 </style>
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link
 href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
 rel="stylesheet"
 />
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link
 href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
 rel="stylesheet"
 />
 <link rel="stylesheet" href="f-style.css" />
 <link rel="stylesheet" href="general.css" />

 <title>NHS Website</title>
 </head>
 <body>

<a class ="header-logo" href="{{ url('/') }}"> NHS
</a>
 <header>
            @if (Route::has('login'))
                
                    @auth
                        <a class="home-icon" href="{{ url('/home') }}">
                            <img border="0"  src="https://cdn-icons-png.flaticon.com/512/1946/1946436.png" width="28" height="28">
                        </a>
                    @else
                        <a href="{{ route('login') }}">Login</a> &nbsp; <! –– adding space between links-->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
        </header>
 <section class="container padding">
 <div class="text-heading">
 Use this website to:
 </div>
    <div class="text-body">
        <ul>
            <li>View your COVID-19 pass</li>
            <li>View and order medication</li>
            <li>View and book GP appointments</li>
            <li>View your health records</li>
            <li>View health announcements</li>
            <li>View the latest information available on COVID-19</li>
        </ul>
    </div>
 <div class="text-heading"> To be able to use this service you must: </div>
        <div class="text-body">
            <ul>
                <li>Be registered with a GP in the UK</li>
                <li>Be over 13 years old</li>
            </ul>
        </div>
 <div class="row mb-0">
    <button class="login-button" onclick="document.location='login'">Login</button>
    <button class="orange-button" onclick="document.location='register'">Register</button>

    </div>
 </section>
 </body>
</html>