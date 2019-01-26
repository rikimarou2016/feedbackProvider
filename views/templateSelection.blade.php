@extends('mainpage')

@section('content')

    <link href="{{asset('css/templateSelection.css')}}" rel="stylesheet">

    <body  style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">


    <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "feedbackprovider";

    $connect = mysqli_connect($hostname, $username,$password,$databaseName );
    //    query 1 is used to retrieve the module code , name and year
    $query = "SELECT * FROM `lastinfos`";
    $query2 = "SELECT * FROM `staffmembers`";
    $query3 = "SELECT * FROM `templates`";
    $query4 = "SELECT * FROM `modules`";
    $query5 = "SELECT * FROM `comments`";

    $result1 = mysqli_query($connect,$query);
    $result2 = mysqli_query($connect,$query2);
    $result3 = mysqli_query($connect,$query3);
    $result4 = mysqli_query($connect,$query4);
    $result5 = mysqli_query($connect,$query5);
    $result6 = mysqli_query($connect,$query3);
    $result7 = mysqli_query($connect,$query5);
    $result8 = mysqli_query($connect,$query);
    $result9 = mysqli_query($connect,$query);

    if ($row1=mysqli_fetch_array($result1)){
        $row1['moduleName'];
    }

    if ($row3=mysqli_fetch_array($result2)  )
    {
        $row3['firstname'];
    }

    if ($row5=mysqli_fetch_array($result3) )
    {
        $row5['markedElementOne'];
    }

    if ($row6=mysqli_fetch_array($result4) )
    {
        $row6['year'];
    }

    if ($row7=mysqli_fetch_array($result5) )
    {
        $row7['shortCommentOne'];
    }

    if ($row8=mysqli_fetch_array($result6) )
    {
        $row8['markedElementTwo'];
    }

    if ($row9=mysqli_fetch_array($result7) )
    {
        $row9['shortCommentSix'];
    }

    if ($row10=mysqli_fetch_array($result8) )
    {
        $row10['moderator'];
    }

    if ($row2=mysqli_fetch_array($result9)){

        $row2['moduleCode'];
    }





    ?>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Feedback and Knowledge</a>
            </div>
            <ul class="nav navbar-nav">
                {{--<li><a href='Staffmember/create'>Register</a></li>--}}

                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li> <li><a ></a></li> <li><a ></a></li> <li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li>
                <li><a href='menupage'>back to previous page</a></li>
                <li><a href='/'>Logout</a></li>

            </ul>
        </div>
    </nav>

    <nav class="navbar navbar maintwo" >
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand"></a>


                <form class="form-group fulltemplate"  method="Post" action="/result">
                    @csrf

                    <h1 align="center" >Feedback</h1>
                        <div class="containerFeedbackOne">
                           <div class="row">
                              <div class="col-md-4">
                                  <h3 class="moduleNamefeedback"> Module name: <?php   echo"<td>".$row1['moduleName']."</td>"; ?></h3>

                              </div>
                                 <div class="col-md-4">
                                   <h3 class="moduleCodeFeedback"> Module code:   <?php   echo"<td>".$row2['moduleCode']."</td>"; ?></h3>
                                 </div>
                                     <div class="col-md-4">
                                       <h3 class="yearFeedback"> year: <?php   echo"<td>".$row6['year']."</td>"; ?></h3>
                                     </div>
                            </div>

                         <div class="row">
                               <div class="col-md-4">
                                   <h3 class="markerFeedback"> Marker: <?php   echo"<td>"  .$row3['firstname'].  ' ' .$row3['lastname']?></h3>
                               </div>
                                    <div class="col-md-4">
                                      <h3 class="moderatorFeedback"> Moderator: <?php   echo"<td>"  .$row10['moderator']?></h3>
                                    </div>
                                       <div class="col-md-4">
                                          <h3 class="sidfeedback" >SID:<input type="text" name="sid" required > </h3>
                                       </div>
                         </div>

                      </div>

                  <div class="containerFeedbackOne">
                       <h3 class="markedElementfeedback">   <?php   echo"<td>".$row5['markedElementOne']. ''.'  <input class= "mark"  name="mark"  required>Out of :'.$row5['scoreOne']?></h3>
                        <br>
                         <h3 class="commentfeedback">  <?php   echo"<td>". ' <input type="checkbox"  > ' .'' .$row7['shortCommentOne'] . ' <input type="checkbox" > ' .'' .$row7['shortCommentTwo'] . ' <input type="checkbox" > ' .'' .$row7['shortCommentThree']. ' <input type="checkbox" > ' .'' .$row7['shortCommentFour']. ' <input type="checkbox" > ' .'' .$row7['shortCommentFive']?></h3>
                            <textarea rows="4" cols="240" class="textareafeedback" name="textAreaOne" id="longComment"required
                                placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                              <br> <br>
                  </div>
                         <br> <br>

                       <div class="containerFeedbackOne">
                          <h3 class="markedElementfeedback">   <?php   echo"<td>".$row8['markedElementTwo']. ''.'  <input class= "mark"  name="mark2"  required>Out of :'.$row8['scoreTwo']?></h3>
                              <h3 class="commentfeedback">  <?php   echo"<td>". ' <input type="checkbox" > ' .'' .$row9['shortCommentSix']. ' <input type="checkbox" > ' .'' .$row9['shortCommentSeven'] . ' <input type="checkbox" > ' .'' .$row9['shortCommentEight']. ' <input type="checkbox" > ' .'' .$row9['shortCommentNine']. ' <input type="checkbox" > ' .'' .$row9['shortCommentTen']?></h3>
                                  <textarea rows="4" cols="240" class="textareafeedback" name="textAreaTwo" id="longComment"required
                                  placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                                 <br> <br>

                       </div>
                              <br><br>
                                        <input type="submit" name="submit" class="btn btn-primary action" value="SAVE">
                               <br><br>

                 </form>



            </div>
               </div>

    </nav>
@endsection