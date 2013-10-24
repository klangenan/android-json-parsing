<?php
header('Content-type: application/json');
require_once 'koneksi.php';

$qry = mysql_query("SELECT id, nama FROM person");

while($row = mysql_fetch_array($qry)){
	$json['person'][] = $row;
}

mysql_close();
echo json_encode($json);

?>