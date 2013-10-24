<?php
header('Content-type: application/json');
require_once 'koneksi.php';

$id = $_GET['id'];
$qry = mysql_query("SELECT * FROM person WHERE id = ".$id);

while($row = mysql_fetch_array($qry)){
	$json['person'][] = $row;
}

mysql_close();
echo json_encode($json);

?>