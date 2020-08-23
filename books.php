<div class="container">
    <div class="row">
        <h2>Books <b>By Genre</b></h2>
        <ul class="list-inline">
            <li><a href="books.php" style="color: purple">All Books</a></li>
            <li><a href="bookshealth.php">Health</a></li>
            <li><a href="booksbio.php">Biographies</a></li>
            <li><a href="booksfan.php">Fantasy</a></li>
            <li><a href="booksrom.php">Romance</a></li>
        </ul> <br />
    </div>
    <div class="row">
        <!-- Search box. -->
        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0 form-search">
            <input class="form-control" type="text" id="search" placeholder="Search" />
            <i class="fa fa-search"></i>
        </form>
        <br>
        <!-- Suggestions will be displayed in below div -->
        <div id="display"></div>
    </div>
</div>


<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT book_isbn, book_image, books_link FROM books";
  
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  require_once "./template2/header.php";
  
?>

<?php
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
  //Search box value assigning to $Name variable.
     $Name = $_POST['search'];
  //Search query.   book_isbn, book_image, books_link FROM books
     $Query = "SELECT book_isbn, book_image, books_link FROM books WHERE book_title LIKE '%$Name%' ";
  //Query execution
     $ExecQuery = MySQLi_query($con, $Query);
  //Creating unordered list to display result.
    
     //Fetching result from database.
     while ($Result = MySQLi_fetch_array($ExecQuery)) {
         ?>
<div class="row">

    <div class="col-md-3">
    
        <a href="<?php echo $Result['books_link']; ?>">
            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $Result['book_image']; ?>">
            <a href="<?php echo $Result['books_link']; ?>" target="_self" class="btn btn-primary btn-read">Read</a>
            <a href="download.php?file=<?php echo $Result['books_link']; ?>" class="btn btn-primary btn-down" download>Download </a>


        </a>
        <?php
            $count++;
            if($count >= 4){
                $count = 0;
                break;
              }
            } ?>
    </div>
    <?php
        
     }
    
  ?>
    <p class="lead text-center text-muted">Full Catalogs of Books</p>
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
                
                <a href="./BOOKS/<?php echo $query_row['books_link']; ?>" target="_blank" class="btn btn-primary btn-resp">Read</a>
                <a href="download.php?file=<?php echo $query_row['books_link']; ?>" class="btn btn-primary btn-down" download>Download </a>
            </a>

        </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?>
    </div>
    <?php
      }
      if(isset($conn)) { mysqli_close($conn); }

?>
