@extends('mainpage')

@section('content')


    <link href="{{asset('css/registrationpage.css')}}" rel="stylesheet" >

    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg/640px-NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg); background-size: 100%;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Feedback and Knowledge</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>


            </ul>
        </div>
    </nav>

    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> <br>
    <h3  class="titleRegistrationpage">Registration</h3>

    <form  method="Post" action="/Staffmember" name="RegistrationForm">
        @csrf

        <p class="Title"   >Title <input type="text" id="title" name="title" required maxlength="255"></p><!-- maxlength used against cross site scripting-->
        <p class="Firstname"   >Firstname <input type="text" id=firstname name="firstname" required maxlength="255"></p>
        <p class="Lastname"   >Lastname <input type="text" id="lastname" name="lastname" required maxlength="255" ></p>
        <p class="email"   >Email <input type="text" id="email" name="email" required maxlength="255"></p>
        <p class="Username"   >Username <input type="text"  id="username" name="username"  maxlength="255" required pattern="([a-zA-Z0-9]){4,16}" title="Username should be 4 to 16 characters long !!"></p>
        <p class="Password"  >Password <input type="password" id="password" name="password" maxlength="255" required pattern="([a-zA-Z0-9]){4,16}" title="Password should be 4 to 16 characters long !!"></p>

        <input type="submit" value="OK"  class="btn btn-success"   >
    </form>





    </body>

@endsection