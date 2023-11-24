<?php
    include_once ('src/vue/header.html.php');
    include_once ('src/vue/index.html.php');
    require_once 'autoloader.php';
    $conn = \App\Database::getInstance()->getConnection();
    $query = 'SELECT id,date,location FROM flight ORDER BY date';
    print "<table><thead><tr>
<th>Date</th>
<th>Location</th>
<th colspan=2>Action</th>
</tr></thead><tbody>";
    foreach ($conn->query($query) as $row) {
        print "<tr>";
        print "<td>" . $row['date'] . "</td>";
        print "<td>" . $row['location'] . "</td>";
        print "<td><a href='/tp1paramentes/show.php?id=" . $row['id'] . "'>voir</td>";
        print "<td><a href='/tp1paramentes/edit.php?id=" . $row['id'] . "'>modifier</td>";
        print "</tr>";
    }
    print "</tbody></table>";

?>
