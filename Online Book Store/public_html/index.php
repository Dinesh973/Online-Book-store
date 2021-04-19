<?php
  session_start();
  $count = 0;
  // connect to database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = mysqli_connect("localhost","id16609197_dsk","-$&|)8^e&XF{lU|%","id16609197_bookstore");
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Our Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>