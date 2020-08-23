
<?php
$file=$_GET['file'];
 header("Content-Disposition: attachment; filename=" . urlencode($file));   /*attachment for downloading file  */
header("Content-Type: application/octet-stream");
$fo=fopen($file,"r");
while(!feof($fo)){
    echo fread($fo,8000);
    flush();
}
fclose($fo);
?>

