<?php

session_start();

header ("Content-type: image/gif");

if(isset($_SESSION['my_captcha']))

{

unset($_SESSION['my_captcha']); 

}

$im=@ImageCreate(65,20) or die ("Cannot Initialize new GD image stream");

$background_color = ImageColorAllocate ($im,210,210,210);

$text_color = ImageColorAllocate ($im,5,188,169);

$string1="ABCDEFGHIJKLMNPQRSTUVWXYZ";

$string2="123456789";

$string=$string1.$string2;

$string= str_shuffle($string);

$random_text= substr($string,0,6);

$_SESSION['my_captcha'] =$random_text;
ImageString($im,5,5,2,$_SESSION['my_captcha'],$text_color);

Imagegif($im); 

imagedestroy($im); 

?>