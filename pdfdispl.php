<?php
$file=$query_row['books_link'];
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename='" . $file ."'");   /*inline to open on the spot*/
/** header("Content-Disposition: attachment; filename='" . $file ."'");   attachment for downloading file  */
header("Content-Transfer-Encoding: binary");
header("Accept-Ranges: bytes");
@readfile($file);
?>