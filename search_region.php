<?php
if(!isset($_REQUEST['term']))
exit();

require('cnx.php');

$term = 

$rs = mysql_query('SELECT NomVille FROM expert WHERE NomVille LIKE "'.ucfirst($_REQUEST['term']).'%" ORDER BY NomVille ASC LIMIT 0,10', $dblink);

$data = array();

while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
	$data[] = array(
		'label' => $row['NomVille'],
		'value' => $row['NomVille'],
	);	
}

echo json_encode($data);
flush(); // Vide les tampons de sortie