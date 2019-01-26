@extends('mainpage')
@section('content')



    <link href="{{asset('css/homepage.css')}}" rel="stylesheet" >

    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg/640px-NASA_Science_Update_-_The_Voyager_Spacecraft_-_Humanity%27s_Farthest_Journey_-_detail.jpg); background-size: 100%;">



    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Feedback and Knowledge</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="loginpage">Login</a></li>
                <li><a href='Staffmember/create'>Register</a></li>

            </ul>
        </div>
    </nav>




@endsection