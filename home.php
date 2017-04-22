<?php
include "checklogin.php";
include "ret.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/log.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    <script src="assets/js/modernizr.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="assets/js/modernizr.js"></script>
		<script>
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
    <style type="text/css" media="screen">


  <style type="text/css" media="screen">

.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  width :300px;
  background-clip: padding-box;
}
.card span.card-title {
    color: BLACK;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}


#prof{
    margin-top: 0%;
        position: absolute;
        left :75%;
        top : 18%;
}
#prof-pic{
    margin-top: -85px;
        position: relative;
        left :25%;
        top : 80%;
}

#cont{
    margin: 0px;
        height: 500px;
        position: relative;
        width: 80%;
}
    #editor {
        margin: 0;
        position: absolute;
        top: 0%;
        bottom: 0%;
        left: 2.5%;
        right: 15%;
        font-size: 10px;
    }
#run {
        margin: 20px;
        height: auto;
        position: relative;
        width: 70%;
        left : 50.5%;
        top: 90%;
    }
#change
{
  visibility : hidden;
  position : absolute;
}
#content1
{
  visibility : hidden;
  position : absolute;
}

    #que {
        margin-top: 130px;
        left : 2.5%;
        width : 65%;
        position: relative;
    }
    #head {
        margin-top: 50px;
        width :50%;
        height : 30px;
        left : 52.5%;
        position: relative;
         color: #ffab40;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
    .profile-userpic img {
  width: 150px;
  height: 150px;
  border-radius: 50% !important;
}
.profile-userpic1 img {
  width: 50px;
  height: 50px;
  border-radius: 50% !important;
}


.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-128x/Preloader_3.gif) center no-repeat #fff;
}



  </style>
</head>
<body>
<div class="se-pre-con"></div>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Code & Earn</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="about.php" class="btn btn-theme">ABOUT</a></li>
           <li><figure class="profile-userpic1"><img class="img-responsive" src="<?php echo $src; ?>" alt="Profile Picture" >
                    </figure></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $_SESSION['Name']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html" class="btn btn-theme">Setting</a></li>
                <li><a href="single-post.html" class="btn btn-theme">SINGLE POST</a></li>
                <li><a href="portfolio.html" class="btn btn-theme">PORTFOLIO</a></li>
                <li><form action="logout.php" method="post">
            <button type="submit" class="btn btn-theme">LOG OUT</button>
            </form></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div id="que">
		 		<h4>Arrays: Left Rotation</h4>
         <br>
		 		<p>A left rotation operation on an array of size n shifts each of the array’s elements 1  unit to the left. For example, if 2  left rotations are performed on array [1,2,3,4,5], then the array would become [3,4,5,1,2].

Given an array of n integers and a number, d, perform d left rotations on the array. Then print the updated array as a single line of space-separated integers.

Explanation

When we perform d=4 left rotations, the array undergoes the following sequence of changes:

[1 2 3 4 5] -> [2 3 4 5 1] -> [3 4 5 1 2] -> [4 5 1 2 3] -> [5 1 2 3 4]

Thus, we print the array’s final state as a single line of space-separated values, which is

[5 1 2 3 4].</p>
</div>

<div id="prof">
<div class="container">
    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="assets/img/code.jpg">
                    <div id="prof-pic">
          <figure class="profile-userpic">
                       <img class="img-responsive" src="<?php echo $src; ?>" alt="Profile Picture" >
                    </figure>
                     </div>

                </div>
                <div class="card-content">
<center>
                    <span class="card-title"><?php echo $_SESSION['Name']; ?></span>
                    <?php echo $_SESSION['email']; ?><br>
                    <br>
                    <a href="#" onclick="myFunction4()" >Upload Image</a><br><br>
                    <a href="#" onclick="myFunction5()" >Change Password</a></center>
      <div id="change" class="card-content">
		<center>	<form role="form" method="post" action="change.php" >
					  <div id="input" class="form-group">
					    <label for="InputName1">Old Password</label>
					    <input type="password" name="old" class="form-control" id="exampleInputEmail1">
					  </div>
                      <div id="input" class="form-group">
					    <label for="InputName1">New Password</label>
					    <input type="password" name="new" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div id="input" class="form-group">
					    <label for="InputEmail1">Confirm Password</label>
					    <input type="password" name="cnew" class="form-control" id="exampleInputEmail1">
					  </div>
					  <button type="submit" class="btn btn-theme">SUBMIT</button>
					</form></center>
	    </div> 
                </div>
                
<div id="content1" class="card-action">
<center><form action="addmember.php" method="post" enctype="multipart/form-data">
 <ul><label class="btn btn-default btn-file">
 Browse Image &nbsp;&nbsp;<span class="glyphicon glyphicon-camera"></span><input type=file  name="filep" size=45>
</label></ul><ul>
<label class="btn btn-default btn-file">
 Upload Image &nbsp;&nbsp;<span class="glyphicon glyphicon-open"></span><input type="submit" value="">
</label></ul>
                </form>
                </center>
                </div>
            </div>
        </div>
     
    </div>
</div>
</div>


<div id="head">
<div>
<select class="selectpicker" id="demo" onclick="myFunction()">
  <option  value="ace/theme/dawn">dawn</option>
  <option  value="ace/theme/github">github</option>
  <option  value="ace/theme/chrome">chrome</option>
  <option  value="ace/theme/twilight">twilight</option>
</select>&nbsp;&nbsp;
<select id="demo1" onclick="myFunction1()">
  <option value="ace/mode/c_cpp">C++</option>
  <option value="ace/mode/java">Java</option>
  <option value="ace/mode/html">html</option>
</select>&nbsp;&nbsp;
<select id="demo2" onclick="myFunction2()">
  <option value="10px">10px</option>
  <option value="12px">12px</option>
  <option value="14px">14px</option>
  <option value="16px">16px</option>
</select>
</div>
</div>


<div id="cont">
<pre id="editor">#include<.iostream.h>
    using namespace std;
    int main()
    {
        cout<<"Hello World";
        return 0;
    }
}</pre>
</div>

<div id="run">
    <a href="#" class="btn btn-theme"> Run code </a>&nbsp;&nbsp;
    <a href="#" class="btn btn-theme">Submit code</a>
    </div>

<footer>
 <div class="row">
    <div class="col-lg-12">
                <hr>
<center>Copyright &copy; Code & Earn 2017
<br>Created By <a href="https://www.facebook.com/praveensinghraghav96">Praveen Raghav</a> with  <a href="http://www.facebook.com/rockgamernamit">Namit Pathak</a>
                            </center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <br>
            <!-- /.row -->
        </footer>

<script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
var editor = ace.edit("editor");
    editor.setTheme("ace/theme/dawn");
    editor.session.setMode("ace/mode/c_cpp");
var strUser;
var lang;
function myFunction() {
    var x = document.getElementById("demo");
    strUser = x.options[x.selectedIndex].value;

    var editor = ace.edit("editor");
    editor.setTheme(strUser);
    editor.session.setMode("ace/mode/c_cpp");
    }
function myFunction1() {
    var x = document.getElementById("demo1");
    lang = x.options[x.selectedIndex].value;

    var editor = ace.edit("editor");
    editor.setTheme(strUser);
    editor.session.setMode(lang);
    }

    function myFunction2() {
        var x = document.getElementById("demo2");
        var size = x.options[x.selectedIndex].value;
document.getElementById("editor").style.fontSize = size;
    }
 function myFunction4() {
    document.getElementById("content1").style.visibility = "visible";
    document.getElementById("change").style.visibility = "hidden";
    }
function myFunction5() {
    document.getElementById("content1").style.visibility = "hidden";
    document.getElementById("change").style.visibility = "visible";
    }


</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
