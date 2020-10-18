<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Information management</title>
        <style>
body {
    background:#eee;
    margin:0 auto;
    padding:0;

}
#nav{
	width: 1000px;
	margin: 20px auto;
	height: 50px;
	background: cornflowerblue;
	border-radius: 15px;
	padding-top: 10px;
	box-shadow: 0 2px 2px 1px #000;
}
#nav li{
	float: left;
	list-style: none;
	text-align: center;
	height: 40px;
	width:140px;
	padding:8px 10px ;

}
#nav a {
    font-weight:bold;
    color:#f4f4f4;
    text-decoration:none;
    display:block;
    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 1px 1px #000;
}
#nav li:hover > a {
    background:#f4f4f4 repeat-x 0 -20px;
    color:#000;
    border-top:1px solid #f8f8f8;
    box-shadow:0 2px 2px rgba(0,0,0, .7); /*some css3*/
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .7);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .7);
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}
#nav ul li:hover a, #nav li:hover li a {
    background:none;
    border:none;
    color:#000;
}
#nav ul li a:hover {
    background:#335599 repeat-x 0 -100px;
    color:#fff;
    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, 0.7);
}
#nav ul li:first-child > a {
    -moz-border-radius-topleft:10px; /*some css3*/
    -moz-border-radius-topright:10px;
    -webkit-border-top-left-radius:10px;
    -webkit-border-top-right-radius:10px;
}
#nav ul li:last-child > a {
    -moz-border-radius-bottomleft:10px; /*some css3*/
    -moz-border-radius-bottomright:10px;
    -webkit-border-bottom-left-radius:10px;
    -webkit-border-bottom-right-radius:10px;
}
#nav li:hover > ul {
    opacity:1;
    visibility:visible;
}
#nav ul {
    opacity:0;
    visibility:hidden;
    padding:0;
    width:120px;
    position:absolute;
    background:#aabbcc repeat-x 0 0;
    border:1px solid #7788aa;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    box-shadow:0 2px 2px rgba(0,0,0, .5);
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);

    -moz-transition:opacity .25s linear, visibility .1s linear .1s;
    -webkit-transition:opacity .25s linear, visibility .1s linear .1s;
    -o-transition:opacity .25s linear, visibility .1s linear .1s;
    transition:opacity .25s linear, visibility .1s linear .1s;
}
#nav ul li {
    float:none;
    margin:0;
}
#nav ul a {
    font-weight:normal;
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}
#nav ul ul {
    left:160px;
    top:0px;
}
#bottom{
	width: 100%;
	text-align: center;
}
</style>


    </head>
    <body align="center">
        <h1>Welcome to BWK system</h1>
        <nav>
	<ul id="nav">
		<li><a href="student.php">View Students</a></li>
		<li><a href="teacher.php">View Teachers</a></li>
		<li><a href="meeting.php">View Meetings</a></li>
		<li><a href="course.php">View Courses</a></li>
		<li><a href="timetable.php">View Timetable</a></li>
		<li><a href="chat.php">Chat Room</a></li>

	</ul>

</nav>

<button
style=
"width:50px; height:25px; box-shadow: 0 2px 2px 1px #000;background: cornflowerblue;border-radius:5px;font-weight:bold;
    color:#f4f4f4;" onclick="window.location.href='login.php';">Exit</button>
    </body>
</html>
