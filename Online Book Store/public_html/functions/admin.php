<?php
	if(!isset($_SESSION['admin']) && $_SESSION['admin'] != true){
		header("Location: index.php");
		footer("Location: books.php");
	}
?>
