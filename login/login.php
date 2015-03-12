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