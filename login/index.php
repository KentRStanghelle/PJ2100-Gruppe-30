<?php

include 'html/header.html';
session_start();

if(isset($_SESSION['username'])){
    echo '	<a href="book.php">Book rom</a> </br> 
    		<a href="logout.php">Logout</a>';
}  else {
    echo '<a href="login.php">Login</a>';
}

?>