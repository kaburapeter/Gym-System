<?php 
session_start();
include 'db_connect';

if(isset($_SESSION['user'])){


	if($_SESSION['type'] == 2){
		echo $_SESSION['user'] . 'this is normal user';
	}

	if($_SESSION['type'] ==1){
		echo $_SESSION['user'] . 'this is admin';
	}
}
?> 

 