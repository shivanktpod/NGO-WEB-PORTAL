<?php
$dbh=mysql_connect ("SERVERNAME", "USERNAME", "PASSWORD")
or die ('I cannot connect to the database because: ' . mysql_error()); mysql_select_db ("DATABASENAME"); 
?>