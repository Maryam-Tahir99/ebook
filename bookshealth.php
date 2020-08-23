<div class="container">
<div class="row">
        <h2>Books <b>By Genre</b></h2>
        <ul class="list-inline">
            <li><a href="books.php">All Books</a></li>
            <li><a href="bookshealth.php" style="color: purple">Health</a></li>
            <li><a href="booksbio.php">Biographies</a></li>
            <li><a href="booksfan.php">Fantasy</a></li>
            <li><a href="booksrom.php">Romance</a></li>
        </ul> <br />
        </div>
        
        
    </div>
    <?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  
  $query="SELECT book_isbn, book_image, books_link FROM books where category='health'";
 
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  require_once "./template2/header.php";
  
?>
<p class="lead text-center text-muted">All Health Books</p>
<?php for($i = 0; $i < mysqli_num_rows($result); $i++) 
    { ?>
    <div class="row">
        <?php 
        
        while($query_row = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-3">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
                <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['book_image']; ?>">
            </a>
            <a href="./BOOKS/<?php echo $query_row['books_link']; ?>">
                
                <a href="./BOOKS/<?php echo $query_row['books_link']; ?>" target="_self" class="btn btn-primary btn-resp">Read</a>
                <a href="./BOOKS/<?php echo $query_row['books_link']; ?>" class="btn btn-primary btn-down" download target="_self">Download </a>
            </a>

        </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?>
  
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  
?>

</div>
 
