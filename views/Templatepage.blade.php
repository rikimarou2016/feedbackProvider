@extends('mainpage')

@section('content')

    <link href="{{asset('css/templatepage.css')}}" rel="stylesheet" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap js library -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <body  style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Feedback and Knowledge</a>
            </div>
            <ul class="nav navbar-nav">

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

                <form class="form-group fulltemplate"  method="Post" action="/template">
                    @csrf


                      <div class="container topContainer">
                          <h5 class="moduleName">Module name:<input  type="text"  name="moduleName"  required> </h5>
                            <br>
                               <div class="row">
                                   <div class="col-sm-4">
                                     <h5 class="MarksheetTitle">Marksheet Title:<input  type="text"  style="width: 300px" name="paperTitle" placeholder="Name of the work being marked" required> </h5>
                                   </div>
                                <div class="col-sm-4">
                                     <h5 class="moduleCode">Module Code:<input  type="text"  style="width: 300px" name="moduleCode"  required> </h5>
                                </div>
                                    <div class="col-sm-4">
                                      <h5 class="year">Year:<input  type="text"  style="width: 300px" name="year"  required> </h5>
                                    </div>
                                </div>
                       </div>


                    <br>

                    <div class="container firstContainer">

                        <div class="input-group">

                            <h5 class="markedElementOne">Element marked:<input type="text"  name="markedElementOne" placeholder="e.g. Presentation" required> </h5>
                            <h5 class="categoryMark">Category's mark:<input type="int"  name="scoreOne" placeholder="e.g. 10%" required> </h5>
                        </div>
                        <br>

                    <div id="containertwo">
                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <input type="text" class="shortComment" name="shortCommentOne" id="shortComment" placeholder="e.g Good presentation" required>
                            </div>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentOne" id="longComment" required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                            </div>

                    </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <input type="text" class="shortComment" name="shortCommentTwo" id="shortComment"required placeholder="e.g Good presentation">
                            </div>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" required name="longCommentTwo" id="longComment"
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <input type="text" class="shortComment" name="shortCommentThree" id="shortComment"  required placeholder="e.g Good presentation">
                            </div>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentThree"  required id="longComment"
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <input type="text" class="shortComment" name="shortCommentFour" id="shortComment" required placeholder="e.g Good presentation">
                            </div>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentFour" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <input type="text" class="shortComment" name="shortCommentFive" id="shortComment" required placeholder="e.g Good presentation">
                            </div>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentFive" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>
                            </div>
                            <br><br>
                        </div>
                        <br><br>

















                        <div class="container secondContainer">

                            <div class="input-group">

                                <h5 class="markedElementOne">Element marked:<input type="text"  name="markedElementTwo" placeholder="e.g. Referencing" required> </h5>
                                <h5 class="categoryMark">Category's mark:<input type="int"  name="scoreTwo" placeholder="e.g. 10%" required> </h5>
                            </div>
                            <br>



                            <div id="containertwo">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <br>
                                        <input type="text" class="shortComment" name="shortCommentSix" id="shortComment" required placeholder="e.g Good referencing">
                                    </div>
                                    <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentSix" id="longComment" required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-sm-2">
                                        <br>
                                        <input type="text" class="shortComment" name="shortCommentSeven" id="shortComment" required placeholder="e.g Good referencing">
                                    </div>
                                    <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentSeven" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                                    </div>


                                </div>



                                <div class="row">
                                    <div class="col-sm-2">
                                        <br>
                                        <input type="text" class="shortComment" name="shortCommentEight" id="shortComment" required placeholder="e.g Good referencing">
                                    </div>
                                    <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentEight" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                                    </div>


                                </div>



                                <div class="row">
                                    <div class="col-sm-2">
                                        <br>
                                        <input type="text" class="shortComment" name="shortCommentNine" id="shortComment" required placeholder="e.g Good referencing">
                                    </div>
                                    <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentNine" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                                    </div>


                                </div>



                                <div class="row">
                                    <div class="col-sm-2">
                                        <br>
                                        <input type="text" class="shortComment" name="shortCommentTen" id="shortComment" required placeholder="e.g Good referencing">
                                    </div>
                                    <div class="col-sm-10">
                                <textarea rows="4" cols="190" class="longComment" name="longCommentTen" id="longComment"required
                                          placeholder="Enter some more explanation on why a mark is achieved and how the work can be improved"></textarea>

                                    </div>

                                </div>




                            </div>
                            </div>
                     <br>
                    <input type="submit" name="submit" class="btn btn-primary action" value="SAVE">
                    <br><br>
                </form>
            </div>
        </div>
    </nav>










@endsection