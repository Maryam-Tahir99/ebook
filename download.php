
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

