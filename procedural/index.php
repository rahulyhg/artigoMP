<?php

include "include/connection.php";

$q = mysql_query("select * from tabela");
while ($row = mysql_fetch_object($q)) {
	
	echo $row->id." ".$row->coluna1." ".$row->coluna2." ".$row->coluna3."<br/>";
	
}