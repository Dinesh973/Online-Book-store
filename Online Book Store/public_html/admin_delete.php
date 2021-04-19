<?php
	$book_isbn = $_GET['bookisbn'];

	require_once "./functions/database_functions.php";
	$conn = mysqli_connect("localhost","id16609197_dsk","-$&|)8^e&XF{lU|%","id16609197_bookstore");

	$query = "DELETE FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>