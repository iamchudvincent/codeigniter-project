<?php
$cimg = imagecreate(100, 30);

imagecolorallocate($cimg, 195, 215, 223); // background color: 14, 114, 180(绿色)
$red = imagecolorallocate($cimg, 255, 0, 0);
$blue = imagecolorallocate($cimg, 6, 12, 254);




$num1 = rand(1, 9);
$num2 = rand(1, 19);
session_start();
$_SESSION['s_validate_code'] = $num1 + $num2;

imagestring($cimg, 5, 5, 5, $num1, $blue);
imagestring($cimg, 5, 30, 5, "+", $blue);
imagestring($cimg, 5, 45, 5, $num2, $blue);
imagestring($cimg, 5, 70, 5, "=?", $blue);
imagefilltoborder($cimg,0,0,100,30,$red);

header("Content-type: image/png");
imagepng($cimg)
?>