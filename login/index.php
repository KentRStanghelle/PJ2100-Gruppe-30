<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

html, body { padding: 0; margin: 0; height: 100%; width: 100%; }

@media only screen and (orientation: portrait)  {
#animasjon{
	margin: auto;
	height: 100%;
	width: 100%;
	position: relative;
	max-width: 640px;
	max-height: 960px;
	overflow: hidden;

}

#content{
	width: 100%;
	top: -250px;
	left: -50px;
	max-width: 500px;
	min-width: 300px;
	position: absolute;
	
}

}

@media only screen and (orientation: landscape) and (max-width:  799px){
#animasjon{
	margin: auto;
	height: 100%;
	width: 100%;
	position: relative;
	max-width: 960px;
	max-height: 640px;
	overflow: hidden;

}

#content{
	width: 100%;
	top: -60px;
	left: -370px;
	max-width: 500px;
	min-width: 350px;
	position: absolute;
	
}
#plassering{
	width: 100%;
	height: 100%;
	position: absolute;
	max-width: 200px;
	max-height: 125px;
	bottom: 35%;
	left: 320px;
}

}


@media only screen  and (min-device-width: 800px) {
	#animasjon{
	margin: auto;
	height: 100%;
	width: 100%;
	position: relative;
	max-width: 640px;
	max-height: 960px;
	overflow: hidden;
	text-align: center;
}

#content{
	width: 100%;
	top: -500px;
	left: -100px;
	max-width: 700px;
	min-width: 500px;
	position: absolute;
	
}
#plassering{
	width: 100%;
	height: 100%;
	position: absolute;
	max-width: 300px;
	max-height: 200px;
	bottom: 20%;
	left: 80px;
}
#booking{
	top: 40%;
	position: absolute;
}
#box{
	width: 100%;
	height: 100%;
	position: absolute;
	max-width: 300px;
	max-height: 200px;
	bottom: 10%;
	left: 0px;
	background-color: rgb(230,0,0);
	border-style: solid;
    border-width: 100%;
    border-max-width: 5px;
    border-color: rgb(200,0,0);
    border-radius: 15%;
}

#text{
	position: relative;
	left: 8%;
	top: -50%;
	}
h1{
	font-size: 3em;
	position: absolute;
}

a{
	color: rgb(0, 0, 0);
	font-size: 3em;
	bottom: -30px;
	left: 0%;
	position: relative;
	text-decoration: none;
}
}
</style>
</head>

<body>
<div id="animasjon">
	<div id="plassering">
		<div id="box">
		<div id="text"><h1> Velkommen!</h1></div>
	<img id="content" src="http://ambisjoner.no/wp-content/uploads/2015/01/Westerdals-logo1.jpg" alt="logo">
<?php

session_start();

if(isset($_SESSION['username'])){
    echo '	<a href="book.php">Book rom</a> </br> 
    		<a href="logout.php">Logout</a>';
}  else {
    echo '<a href="login.php">Logg inn</a>';
}

?>
  
</div>

</body>

</html> 


