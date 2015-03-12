<h1>Book rom</h1>
<form method="POST">
DAG:<br />
<input type="text" name="dag">
<br/>
TID:<br />
<input type="text" name="tid">
</br>
PROSJEKTOR:
</br>
<input type="text" name="prosjektor">
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