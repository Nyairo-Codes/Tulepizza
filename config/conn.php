<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'evans', 'Nyairo@128', 'nyairo_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
    ?>