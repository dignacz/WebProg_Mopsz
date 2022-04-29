<?php
$connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('mopszmentes_beadando');

$query = "SELECT * FROM contacts_list ORDER BY sent_date DESC"; 
$result = mysql_query($query);
?>

<div class ='container'>
<table class='table table-striped'>
<thead><tr>
<th scope='col'>id</th>
<th scope='col'>Név</th>
<th scope='col'>Email</th>
<th scope='col'>Telefonszám</th>
<th scope='col'>Tárgy</th>
<th scope='col'>Üzenet</th>
<th scope='col'>Dátum</th>
<?php
while($row = mysql_fetch_array($result)){   
echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['email']) . "</td><td>" .htmlspecialchars($row['phone']) . "</td><td>" . htmlspecialchars($row['subject']) . "</td><td>" . htmlspecialchars($row['Message']) . "</td><td>" . htmlspecialchars($row['sent_date']) . "</td></tr>";  
}
?>
</tr></thead>
</table>
</div>
<?php
mysql_close(); 
?>
