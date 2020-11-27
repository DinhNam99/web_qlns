<?php

	$con = new mysqli('localhost', 'root', '', 'hus_staff');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
	if (!$con->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $con->error);
  } else {
     $con->character_set_name();
  }
	
?>