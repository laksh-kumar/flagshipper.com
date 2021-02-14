<?php

require 'conn.php';

$qry = "select * from phonedata";
$result = mysqli_query($conn, $qry);

$phone1 = mysqli_fetch_assoc($result);
$phone2 = mysqli_fetch_assoc($result);
$phone3 = mysqli_fetch_assoc($result);
$phone4 = mysqli_fetch_assoc($result);
$phone5 = mysqli_fetch_assoc($result);
$phone6 = mysqli_fetch_assoc($result);
$phone7 = mysqli_fetch_assoc($result);
$phone8 = mysqli_fetch_assoc($result);
$phone9 = mysqli_fetch_assoc($result);
$phone10 = mysqli_fetch_assoc($result);
$phone11 = mysqli_fetch_assoc($result);
$phone12 = mysqli_fetch_assoc($result);
$phone13 = mysqli_fetch_assoc($result);
$phone14 = mysqli_fetch_assoc($result);
$phone15 = mysqli_fetch_assoc($result);
$phone16 = mysqli_fetch_assoc($result);
$phone17 = mysqli_fetch_assoc($result);
$phone18 = mysqli_fetch_assoc($result);
$phone19 = mysqli_fetch_assoc($result);
$phone20 = mysqli_fetch_assoc($result);

?>