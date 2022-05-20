<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
a:link, a:visited {
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

/**  **/
/* colour of unvisited link */
/* colour of visited link */
a.p:link, a.p:visited {
  color: none;
  text-decoration: none;
  background-color: none;
}

/* colour of mouse over link */
a.p:hover {
  color: none;
  border:none;
  text-decoration: none;
}

/* colour of selected link */
a.p:active {
  color: none;
  background-color: transparent;
  text-decoration: none;
}

/**  **/
/* colour of unvisited link */
/* colour of visited link */
a.body:link, a.body:visited {
  color: black;
  text-decoration: none;
}

/* colour of mouse over link */
a.body:hover {
  color: #2A2A2A;
  border-bottom: 2.5px solid yellow;
  text-decoration: none;
}

/* colour of selected link */
a.body:active {
  color: #2A2A2A;
  background-color: yellow;
  text-decoration: none;
}

header {
 font-size: 1.6rem;
 text-align: right;
 padding: 2.2rem;
 background: #85B6EF;
 color: #FFFFFF;
 height: 6rem;
 margin-top: -40px;
}

nav-header {
 font-size: 1.6rem;
 text-align: right;
 padding: 0.2rem;
 background: #065EB9;
 color: #FFFFFF;
}

.nav-links {
 font-size: 1.6rem;
 margin-left: 25.5rem;
 margin-top: -.5rem;
 color: #2A2A2A;
 font-weight: 400;
 width: 1127px;
 max-width: 150rem;

}
/** Global nav links, middle **/
/* colour of unvisited link */
/* colour of visited link */
a.nav:link, a.nav:visited, a.nav:hover  {
  color: white;
  text-decoration: none;
  padding-left: 8px;
  padding-right: 2px;
  border-right: solid 1px;
}

/* colour of mouse over link */
a.nav:hover, a.nav:last-child:hover {
  border-bottom: 2.5px solid yellow;
}

/* colour of selected link */
a.nav:active {
  color: #2A2A2A;
  background-color: yellow;
}

a.nav:last-child{
border: none;
}

/** Container holding middle global nav links**/
.global-container {
 max-width: 185rem;
 background-color: #85B6EF;
 margin: 0 auto;
 width: 1803px;
 margin-left: -2.5rem;
 margin-top: 3.8rem;
 position: absolute;
}

/** Padding applied to global-container**/
.global-padding {
 padding: 1.3rem;
}

.advice-container {
 max-width: 130rem;
 background-color: white;
 margin: 0 auto;
 width: 60%;
 min-width: 75%;
 margin-left: 20rem;
 height:60%;
 min-height:60%;
 position: absolute;
 margin-top: 10rem;
 margin-left: 10rem;
 text-align: left;
}

/** Container for welcome page**/
.container, .home-container, .login-container {
 max-width: 130rem;
 background-color: white;
 margin: 0 auto;
 width: 60%;
 min-width: 75%;
 margin-left: 20rem;
 height:60%;
 min-height:60%;
 position: absolute;
 
}

/** Container for vac_info page**/
.container{
   margin-top: 5.9rem;
   margin-left: 17.8rem;
}

/** Container for home page**/
.home-container {
 margin-top: -6.5rem;
 margin-left: 17.8rem;
}

/** Container for login page**/
.login-container {
  margin-left: 20.0rem;
 
}

.padding {
 padding: 3.6rem;
}

/** styling applied to headings **/
.text-heading,.text-heading-login, .text-heading-reg, .text-heading-med, .text-heading-history, .text-heading-booked, .text-heading-create-app, .text-heading-health, .text-heading-info, .text-heading-advice, .text-heading-update, .text-heading-provide {
 font-size: 2.6rem;
 margin-bottom: -5.5rem;
 margin-top: -0.5rem;
 color: #2A2A2A;
 font-weight: 600;
 width: 800px;
}

.text-heading-update {
  margin-left: -75.5rem;
  margin-top: -6.5rem;
}

/** styling applied to advice heading **/
.text-heading-advice {
 margin-left: -53.0rem;
}

/** styling applied to login heading **/
.text-heading-login {
 margin-left: -4.0rem;
}

.text-heading-reg {
 margin-left: -4rem;
}

/** positioning applied to heading of vac_info page**/
.text-heading{
     margin-left: -50rem;
}

/** positioning applied to heading of meds page**/
.text-heading-med {
  margin-left: -60rem;
}

/** positioning applied to heading of req_history page**/
.text-heading-history {
 margin-left: -58.2rem;
}

/** positioning applied to heading of confirmed_apps page**/
.text-heading-booked {
 margin-left: -54.3rem;
}

/** positioning applied to heading of apps/create page**/
.text-heading-create-app {
 margin-left: -54.9rem;
}

/** positioning applied to heading of health_info page**/
.text-heading-health{
 margin-left: -61.9rem;
}

/** positioning applied to heading of /patients page**/
.text-heading-info{
 margin-left: -60.9rem;
}

/** positioning applied to heading of /patients/create page**/
.text-heading-provide{
 margin-left: -57.5rem;
}

/** styling applied to body text **/
.text-body, .text-body-create-app, .text-body-login, .text-body-reg, .text-body-update, .text-body-provide {
 display: grid;
 gap: 2.6rem;
 margin-bottom: 4.8rem;
 color: #2A2A2A;
 width: 800px;
 font-size: 90%;;
}

.text-body-advice {
 display: grid;
 margin-left: -12rem;
 margin-top: -6rem;
 gap: 1rem;
 margin-bottom: 4.8rem;
 color: #2A2A2A;
 width: 990px;
 font-size: 90%;;
}

/** positioning applied to body text of /patients/edit page**/
.text-body-update{
 margin-left: -69.5rem;
 margin-top: 7rem;
}

/** positioning applied to body text of vac_info page**/
.text-body{
 margin-left: -13rem;
 margin-top: 6rem;
}

/** positioning applied to body text of vac_info page**/
.text-body-provide{
 margin-left: -54rem;
 margin-top: 7rem;
}

/** positioning applied to body text of apps/create page**/
.text-body-create-app {
 margin-left: 2rem;
 text-align: left;
 margin-top: 6rem;
}

/** positioning applied to body text of apps/create page**/
.text-body-login {
 margin-left: 4rem;
 text-align: left;
 margin-top: -1.5rem;
}

/** positioning applied to body text of regsiter page**/
.text-body-reg {
 margin-left: 4rem;
 text-align: left;
 margin-top: -1.5rem;
}

/** styling applied the logo**/
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

/** styling applied buttons **/
button, .button-med, .orange-button, .red-button, .green-button, .blue-button{
 font-family: 'Rubik', sans-serif;
 font-size: 1.5rem;
 color: #FFFFFF;
 font-weight: 600;
 display: inline-block;
 margin-top: 1rem;
 margin-right: 1rem;
 border: solid;
 border-color: #505050;
 border-radius: 15px 15px 15px 15px;
 background-color: #FEF49C;
 cursor:pointer;
 position: relative;
 box-shadow: 2.5px 5px #888888;
}

.blue-button {
    border-color: #8DC1FA;
    background-color: #8DC1FA;
}

.blue-button:hover {
 font-style: italic;
 background-color: #78A5DB;
 border-color: #78A5DB;
}

.orange-button {
    border-color: #EFD00B;
    background-color: #EFD00B;
}
.orange-button:hover {
 font-style: italic;
 background-color: #DBBF0B;
 border-color: #DBBF0B;
}

.red-button {
    border-color: #EA6643;
    background-color: #EA6643;
}
.red-button:hover {
 font-style: italic;
 background-color: #D0593C;
 border-color: #D0593C;
}

.green-button {
    border-color: #82C30A;
    background-color: #82C30A;
}
.green-button:hover {
 font-style: italic;
 background-color: #75AE0A;
 border-color: #75AE0A;
}

/** styling applied buttons in apps/create page **/
button{
 padding: 1rem;
 padding-right: 2rem;
 padding-left: 2rem;
}

/** styling applied buttons in apps/create page **/
.button-med {
 padding: 0.8rem;
 padding-right: 1.3rem;
 padding-left: 1.3rem;
}

/** styling applied to dropdown menu  **/
.dropbtn {
 background-color: #82C30A;
 color: white;
 padding: 12px;
 font-size: 16px;
 border: solid;
 border-color: #82C30A;
 box-shadow: 2.5px 5px #888888;

}

.dropdown {
 position: relative;
 display: inline-block;
 margin-right: 35px;
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f1f1f1;
 min-width: 120px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
 text-align: left;
}

.dropdown-content a {
 color: black;
 padding: 12px 10px;
 text-decoration: none;
 display: block;
}

.dropdown-content a:hover {
 background-color: #ddd;
}

.dropdown:hover .dropdown-content {
 display: block;
}

.dropdown:hover .dropbtn {
 background-color: #75AE0A;
 border-color: #75AE0A;
}
/** styling applied to tables **/
  table, .table-med,   .table-info {
  border-collapse: collapse;
  width: 70%;
  margin-left: 15rem;
  margin-top: 0.3rem;
}

/** styling applied to table in meds page **/
  .table-med {
  width: 110%;
  margin-top: -2.7rem;
}

/** styling applied to table in /patients page **/
  .table-info {
  width: 40%;
  margin-top: -2.7rem;
}

td {
  padding: 10px 0;
  border: solid;
  border-width: 1px 0;
  border-right: solid;
  border-left: solid;
  width:100px;
  text-align:center;
}
td:first-child,td:last-child {
  border-right: none;
  border-left: none;
}

th {
  padding: 10px 0;
  border-right: solid;
  border-left: solid;
  width:100px;
  text-align:center;
}

th:first-child, th:last-child  {
  border-top: none;
  border-left: none;
  border-right: none;
}

th:first-child {
  border-top: none;
  }

th:last-child {
  border-bottom: none;
}

.td-info:first-child,.td-info:last-child {
  border-right: solid;
  border-left: solid;
}

.th-info {
  padding: 10px 0;
  border: solid;
  border-width: 1px 0;
  border-right: solid;
  border-left: solid;
  width:100px;
  text-align:center;
}
.th-info:first-child,.th-info:last-child {
  border-right: none;
  border-left: none;
}

 </style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>NHS Website</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>

</head>
<body>
    {{--logo image placed --}} 
        <a class ="header-logo" href="{{ url('/home') }}"> NHS </a>
    <header>
            {{--login and register button on welcome page, shown if not logged in --}} 
                            @guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a> &nbsp; <! –– adding space between links-->
                            @endif

                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
    
       </header>        
                    <!-- Left Side Of Navbar -->
                        @else

                        <section class="global-container global-padding">
                    <div class="nav-links">
                        @if(Auth::user()->role==0) 
            {{--if user is logged in, the following links are shown --}} 
                                <a class="nav" href="{{ url('patients') }}" class="btn btnprimary">Account info </a>
                                <a class="nav" href="{{ url('/vac_info') }}" class="btn btnprimary">Covid pass </a>
                                <a class="nav" href="{{ url('/health_info') }}" class="btn btnprimary">Health records </a>
                                <a class="nav" href="{{ url('/apps/create') }}" class="btn btnprimary">Book appointment </a>
                                <a class="nav" href="{{ url('/confirmed_apps') }}" class="btn btnprimary">View appointments </a>
                                <a class="nav" href="{{ url('/meds') }}" class="btn btnprimary">Order medication </a>
                                <a class="nav" href="{{ url('/req_history') }}" class="btn btnprimary">Medication history </a>
                                <a class="nav" href="{{ url('/home') }}" class="btn btnprimary">Announcements </a>

            {{--if admin is logged in, the following link is shown --}} 
                        @if(Auth::user()->role==1)
                            <a class="" href="{{ route('display_patient') }}" class="btn btnprimary" class="btn btnprimary">Display patients </a>
                        @endif
                    </div>
                </section>
                            {{--dropdown menu --}} 
                            <div class="dropdown">
                                  <a class="dropbtn">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-content">
                                  <a href="{{ url('patients') }}" class="btn btnprimary">Account info </a>
                                  <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-8">
            @yield('content')
        </div>
        </div>

</body>
</html>
