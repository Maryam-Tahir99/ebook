<?php
//Including Database configuration file.
//Database connection.
$con = MySQLi_connect("localhost", "root", "", "www_project");
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
  $count = 0;
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
              <a href="<?php echo $Result['books_link']; ?>" target="_self" class="btn btn-primary btn-resp">Read</a>  
              <a href="download.php?file=<?php echo $Result['books_link']; ?>" class="btn btn-primary btn-down">Download </a>

           
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>>
<?php
      
   }
  
?>

 



 