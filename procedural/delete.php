<?php

include "include/connection.php";


echo $q = mysql_query("delete from tabela where id = 5") or die(mysql_error());

