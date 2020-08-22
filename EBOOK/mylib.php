<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT b.book_isbn, b.book_image, l.book_title , c.ID
           FROM books b,library l, loginform c
           WHERE l.book_title=b.book_title AND c.ID=l.ID";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  
  require_once "./template2/header.php";
  
?>


<?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
<div class="row">
    <?php while($query_row = mysqli_fetch_assoc($result)){ ?>

    <div class="col-md-3">
        <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
            <img class="img-responsive img-thumbnail" style="float: left; width:  200px; height: 250px; background-size: cover;
                padding:3px;text-align:center; " title="<?php echo $query_row['book_title']; ?>"
                 src="./bootstrap/img/<?php echo $query_row['book_image']; ?>">
            <div style="height:2.8em;overflow: hidden;line-height:1.3em;font-weight:bold;padding:3px 0px; display: block;"><?php echo $query_row['book_title']; ?></div>
        </a>
        <input type="submit" value="READ NOW" name="cart" class="btn btn-primary" style=" width:  200px;" onclick="add()">
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
  require_once "./template2/footer.php";
?>
