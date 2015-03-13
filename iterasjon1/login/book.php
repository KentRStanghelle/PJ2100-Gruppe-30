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

}
</style>
</head>

<body>
<div id="animasjon">
    <div id="plassering">
    <img id="content" src="http://ambisjoner.no/wp-content/uploads/2015/01/Westerdals-logo1.jpg" alt="logo">

<h1>Book rom</h1>
<form method="POST">
DAG:<br />
<select name="dag">
    <option value="Mandag">Mandag</option>
    <option value="Tirsdag">Tirsdag</option>
    <option value="Onsdag">Onsdag</option>
    <option value="Torsdag">Torsdag</option>
    <option value="Fredag">Fredag</option>
    <option value="Lørdag">Lørdag</option>
    <option value="Søndag">Søndag</option>
</select>
<br/>
TID:<br />
<select name="tid">
    <option value="1 time">1 time</option>
    <option value="2 timer">2 timer</option>
    <option value="3 timer">3 timer</option>
    <option value="4 timer">4 timer</option>
    <option value="5 timer">5 timer</option>
    <option value="6 timer">6 timer</option>
    <option value="7 timer">7 timer</option>
</select>
</br>
PROSJEKTOR:
</br>
<select name="prosjektor">
  <option value="Ja">Ja</option>
  <option value="Nei">Nei</option>
</select>
</br>
    <input type="submit" value="book rom">
</form>

<?php
session_start();

    if(isset($_POST['dag'], $_POST['tid'], $_POST['prosjektor'])){
        require 'connect.php';

        $query = dbConnect()->prepare("INSERT INTO book (dag, tid, prosjektor) VALUES (:dag, :tid, :prosjektor)");
        $query->bindParam(':dag', $_POST['dag']);
        $query->bindParam(':tid', $_POST['tid']);
        $query->bindParam(':prosjektor', $_POST['prosjektor']);

        if($query->execute()){
            header("Location: showbooking.php");
        } else{
            echo 'ERROR';
        }
    }
?>
</div>

</body>

</html> 

