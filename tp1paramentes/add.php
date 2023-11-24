<?php
require_once 'autoloader.php';
require_once('src/vue/add.html.php');

if (isset($_POST["date"])){
    try {
        $conn = \App\Database::getInstance()->getConnection();
        $query = 'INSERT INTO flight (date, location, from_, to_, time, comment) VALUES("'
            .$_POST["date"]
            .'","'.$_POST["location"]
            .'","'.$_POST["from"]
            .'","'.$_POST["to"]
            .'","'.$_POST["time"]
            .'","'.$_POST["comment"].'")';
       $conn->query($query);
        header('location:/tp1paramentes/show.php?id='.$conn->lastInsertId());
    } catch (PDOException $e) {
        echo 'not connected !'.$e;
    }
}
include_once ('src/vue/footer.html.php');
?>

