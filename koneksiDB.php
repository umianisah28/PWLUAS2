<?php
	$servename ="localhost";
	$username = "root";
	$password = "";
	$namaDB ="pwluas";

	
	$kon = new mysqli($servename,$username,$password);
	$selectDB = mysqli_select_db($kon, $namaDB);

  ?>
