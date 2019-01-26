@extends('mainpage')

@section('content')

    <link href="{{asset('css/assignTemplatepage.css')}}" rel="stylesheet">

    <body  style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">

    <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "feedbackprovider";


    $connect = mysqli_connect($hostname, $username,$password,$databaseName );
    //    query 1 is used to retrieve the module code , name and year
    $query = "SELECT * FROM `modules`";
    //    query 2 is used to retrieve the type of assignment
    $query2 = "SELECT * FROM `templates`";

    $result1 = mysqli_query($connect,$query);
    $result2 = mysqli_query($connect,$query);
    $result3 = mysqli_query($connect,$query);
    $result4 = mysqli_query($connect,$query2);

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


                <form class="form-group fulltemplate"  method="Post" action="/templateSelect">
                    @csrf

                    <div class="containerTemplateSelection">
                        <h3 class="templateSelectionTitle">Assign a Module to a Marking Sheet Template</h3>

                        <div class=" containerTwo">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="moduleName" >Module:
                                        {{--the code below is used to retrieve the data from the table templates--}}
                                        <select name=moduleName>
                                            <?php while ($row1 = mysqli_fetch_array($result1)):?>
                                            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </h5>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="moduleCode" >Module Code:
                                        <select  name="moduleCode">
                                            <?php while ($row2 = mysqli_fetch_array($result2)):?>
                                            <option value="<?php echo $row2[2];?>"><?php echo $row2[2];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </h5>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="year"  >Year:
                                        <select name="year">
                                            <?php while ($row3 = mysqli_fetch_array($result3)):?>
                                            <option value="<?php echo $row3[3];?>"><?php echo $row3[3];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </h5>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="MarksheetTitle">Assignment:
                                        <select name="paperTitle">
                                            <?php while ($row1 = mysqli_fetch_array($result4)):?>
                                            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h5 class="element">Element:<input  type="text" name="element"  required> </h5>
                            </div>

                            <div class="col-md-6">
                                <h5 class="marker">Marker:<input  type="text" name="marker"  required> </h5>
                            </div>

                            <div class="col-md-6">
                                <h5 class="markerEmail">Marker email:<input  type="text" name="markerEmail"  required> </h5>
                            </div>

                            <div class="col-md-6">
                                <h5 class="moderator">Moderator:<input  type="text" name="moderator"  required> </h5>
                            </div>

                        </div>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary action2" value="SAVE">

                    </div>
                </form>
            </div>
        </div>
    </nav>



@endsection