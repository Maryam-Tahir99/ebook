<!DOCTYPE html>
<html lang="en">

<head>
    <style>

    </style>

</head>

<body>
    <?php
  session_start();
  $book_isbn = $_GET['bookisbn'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();
$query1 = "SELECT book_isbn, book_image, books_link FROM books";
  
  $result1 = mysqli_query($conn, $query1);
  $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['book_title'];
  require "./template2/header.php";
?>
    <!-- Example row of columns -->
    <p class="lead" style="margin: 25px 0"><a href="books.php" style="color: rgb(255, 69, 0); font-weight: bold; ">Books</a> > <?php echo $row['book_title']; ?></p>
    <div class="row">
        <div class="col-md-3 text-center">
            <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['book_image']; ?>">
        </div>
        <div class="col-md-6">
            <h4 style="color: rgb(255, 69, 0);">Book Description</h4>
            <p><?php echo $row['book_descr']; ?></p>
            <h4 style="color: rgb(255, 69, 0);">Book Details</h4>
            <table class="table">
                <?php foreach($row as $key => $value){
              if($key == "book_descr" || $key == "book_image" ||  $key == "book_title"){
                continue;
              }
              switch($key){
                case "book_isbn":
                  $key = "ISBN";
                  break;
                case "book_title":
                  $key = "Title";
                  break;
                case "book_author":
                  $key = "Author";
                  break;
                
                      
             
              }
            ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
                <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
            </table>

            
            <div class="row">
                <?php 
        $query_row = mysqli_fetch_assoc($result1); ?>
                <div class="row">
                <div class="col-sm-3">

                    <a href="./BOOKS/<?php echo $query_row['books_link']; ?>">

                        <a href="./BOOKS/<?php echo $query_row['books_link']; ?>" target="_blank" class="btn btn-primary btn-resp-read">Read</a>
                        </div>
                  <div class="col-sm-3">        
                        <a href="download.php?file=<?php echo $query_row['books_link']; ?>" class="btn btn-primary">Download </a>
                    </a>

                </div>
                </div>
            </div>
            <?php
      
      
  
?>

        </div>
    </div>

</body>

</html>

