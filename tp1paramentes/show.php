<?php
include_once ('src/vue/header.html.php');
include_once('src/vue/show.html.php');
require_once 'autoloader.php';
try {

    $conn = \App\Database::getInstance()->getConnection();
    $query = 'SELECT * FROM flight WHERE id="'.$_GET['id'].'"';
    print "<table><thead><tr>
<th>Date</th>
<th>Location</th>
<th>From</th>
<th>To</th>
<th>Time</th>
<th>Comment</th>
<th colspan=2>Action</th>
</tr></thead><tbody>";
    foreach ($conn->query($query) as $row) {
        print "<tr>";
        print "<td>" . $row['date'] . "</td>";
        print "<td>" . $row['location'] . "</td>";
        print "<td>" . $row['from_'] . "</td>";
        print "<td>" . $row['to_'] . "</td>";
        print "<td>" . $row['time'] . "</td>";
        print "<td>" . $row['comment'] . "</td>";
        print "<td><a href='/tp1paramentes/edit.php?id=" . $_GET['id'] . "'>modifier</td>";
        print "<td><a href='/tp1paramentes/delete.php?id=" . $_GET['id'] . "'>supprimer</td>";
        print "</tr>";
    }
    print "</tbody></table>";

} catch (PDOException $e) {
    echo 'not connected !';
}
include_once ('src/vue/footer.html.php');
?>
