<?php
include('html/footer.html');
?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/headder.css">
	<link rel="stylesheet" href="css/home.css">
	
<style type="text/css">
	@font-face
 {
    font-family: myFirstFont;
    src: url(font/barrio/Barrio-Regular.woff);
 }

.text1
{   padding-top: 50px;
    font-family: myFirstFont;
    text-align: center;
     font-size: 64px;
   line-height: 73px;
   margin-bottom: 25px;
   height: 50px;
}
</style>	



</head>
<body>
<ul>
	<li><a class="active" href="#home">Home</a></li>
	<li><a href="#news">New Feeds</a></li>
	<li><a href="#contact">Contact</a></li>
	<li style="float:right"><a href="#about">About</a></li>
	</ul>
	<br><br>
<center>
<img src="images/2.jpg">
</center>
<div class="text1">Your Idea! We design!</div>

<div style="background-image: url("images/2.jpg");" class="parallax"></div>

<div style="height:1000px;background-color:red;font-size:36px">
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>

<div class="parallax"></div>
</body>
</html>
