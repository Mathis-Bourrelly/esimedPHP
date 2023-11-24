<?php

require_once('src/vue/delete.html.php');
try {
    $conn = \App\Database::getInstance()->getConnection();
    $query = 'DELETE FROM flight WHERE id='.$_GET['id'];
    $conn->query($query);
    header('location:/tp1paramentes/index.php');
} catch (PDOException $e) {
    echo 'not connected !';
}

