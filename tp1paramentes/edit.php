<?php
include_once ('src/vue/header.html.php');
try {
    require_once 'autoloader.php';
    $conn = \App\Database::getInstance()->getConnection();
    $query = 'SELECT date , location , from_ , to_ , time, comment FROM flight WHERE id=' . $_GET['id'];
    $result = array();
    foreach ($conn->query($query) as $row) {
        $result['date'] = date('Y-m-d', strtotime($row['date']));
        $result['location'] = $row['location'];
        $result['from'] = $row['from_'];
        $result['to'] = $row['to_'];
        $result['time'] = $row['time'];
        $result['comment'] = $row['comment'];
    }
} catch (PDOException $e) {
    echo 'not connected !' . $e;
}

if (isset($_POST["date"])){
    try {
        $conn = \App\Database::getInstance()->getConnection();
        $query = 'UPDATE flight SET '
            .'date="'.$_POST["date"]
            .'",location="'.$_POST["location"]
            .'",from_="'.$_POST["from"]
            .'",to_="'.$_POST["to"]
            .'",time="'.$_POST["time"]
            .'",comment="'.$_POST["comment"].'" WHERE id='.$_GET['id'];
        $conn->query($query);
        header('location:/tp1paramentes/show.php?id='.$_GET['id']);
    } catch (PDOException $e) {
        echo 'not connected !'.$e;
    }
}
require_once ('src/vue/edit.html.php');
include_once ('src/vue/footer.html.php');
?>
