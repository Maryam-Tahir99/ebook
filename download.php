<?php 
  function db_connect(){
		$conn = mysqli_connect("b4iusavqtcp6yyxxw5vq-mysql.services.clever-cloud.com", "uhf0favw8nk12ttz", "H364o9KGBhDcTwnJrPyq", "b4iusavqtcp6yyxxw5vq");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}


<?php
$file=$_GET['file'].".pdf";
 header("Content-Disposition: attachment; filename=" . urlencode($file));   /*attachment for downloading file  */
$fo=fopen($file,"r");
while(!feof($fo)){
    echo fread($fo,8000);
    flush();
}
fclose($fo);
?>
?> 
