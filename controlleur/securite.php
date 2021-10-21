<?php
session_start();
	
	if(!isset($_SESSION['connect']) || !$_SESSION['connect'])
	{
		$message = "Vous avez ete deconnecté";
		header('Location: index.php?'.$message);
	}

?>