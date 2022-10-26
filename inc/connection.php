<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'userdb';

    // $connection = mysqli_connect('localhost', 'root', '', 'userdb');

    $connection = mysqli_connect( $dbhost, $dbuser, $dbpassword, $dbname);
	

	//checking the connection
	if(mysqli_connect_errno()){
		die('Database connection failed ' . mysqli_connect_error());
	}
?>