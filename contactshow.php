<?php
$connection = mysql_connect('localhost', 'root', '');
mysql_select_db('mopszmentes_beadando');

$query = "SELECT * FROM contacts_list ORDER BY sent_date DESC LIMIT 1"; 
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){
                   echo"<div class='row'>";
                   echo "<table border='1'>";
                   echo "<thead>";
                   echo "</thead>";
                   echo "<tr>";
                   echo "<td>Név</td>";
                   echo "<td>". htmlspecialchars($row['name']) ."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Email</td>";
                   echo "<td>". htmlspecialchars($row['email']) ."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Telefonszám</td>";
                   echo "<td>". htmlspecialchars($row['phone']) ."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Tárgy</td>";
                   echo "<td>" . htmlspecialchars($row['subject']) ."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Üzenet</td>";
                   echo "<td>". htmlspecialchars($row['Message']) ."</td>";
                   echo "</tr>";
                   echo "</table>";
                   echo"</div>";
}
mysql_close();
    ?>