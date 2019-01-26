@extends('mainpage')
@section('content')



    <link href="{{asset('css/loginpage.css')}}" rel="stylesheet" >

    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg/640px-NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg); background-size: 100%;">

    <body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Feedback and Knowledge</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href='Staffmember/create'>Register</a></li>

                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li>
                <li><a href='/'>Home</a></li>

            </ul>
        </div>
    </nav>

    <div class="btn-group">
    </div>


    <br><br><br><br> <br><br> <br><br><br><br><br><br> <br><br> <br><br>


    <form action="/loginme" method="post" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">


        <p class="Username"   >Username <input type="text" name="username" id="Username" required pattern="([a-zA-Z0-9]){4,16}" title="Username should be 4 to 16 characters long !!"></p>
        <p class="Password"  >Password <input type="password" name="password" id="Password" required pattern="([a-zA-Z0-9]){4,16}" title="Password should be 4 to 16 characters long !!"></p>


        <div class="row">
            <div class="col"><div class="colOne"> <input type="submit" value="Login" id="ok"  class="btn btn-success"></div>
        </div>
        </div>

    </form>

@endsection