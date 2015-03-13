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

#logo{
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

#logo{
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

#logo{
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

}
</style>
</head>

<body>
<div id="animasjon">
    <div id="plassering">
    <a href="index.php"><img id="logo" src="http://ambisjoner.no/wp-content/uploads/2015/01/Westerdals-logo1.jpg" alt="logo"></a>

<h1>Login</h1>
<form method="POST">
Username: </br><input type="text" name="username"><br />
Password: </br><input type="password" name="password"><br />
    <input type="submit" value="login">
</form>

<?php
session_start();
    if(isset($_POST['username'], $_POST['password'])){
        require 'connect.php';

        $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':password', $_POST['password']);
        $query->execute();


        if($row = $query->fetch()){
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        }
    }
?>
</div>

</body>

</html> 