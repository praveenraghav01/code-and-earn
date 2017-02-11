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
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>SOLID - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    <script src="assets/js/modernizr.js"></script>

  <style type="text/css" media="screen">
    body {
    }

#cont{
    margin: 10px;
        height: 500px;
        position: relative;
        width: 100%;
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
#footer {
        margin: 20px;
        height: auto;
        position: relative;
        width: 90%;
        top: 90%;
        bottom : -1px;
    }

    #que {
        margin: 20px;
        position: relative;
    }
    #head {
        margin: 10px;
        position: relative;
        left: 65%;
    }
  </style>
</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Code & Earn</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li class="active"><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div id="que" class="container">
        hihihihii
		 		<h4>More About Our Agency.</h4>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		 		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		 		<p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
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
<pre id="editor">function foo(items) {
    var i;
    for (i = 0; i &lt; items.length; i++) {
        alert("Ace Rocks " + items[i]);
    }
}</pre>
</div>

<div id="footer">
footer
    </div>


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
