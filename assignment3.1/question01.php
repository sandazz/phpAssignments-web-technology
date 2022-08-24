<?php
$path  = 'http://localhost/PHPIntro/accessing_string.php';
$file_name = substr(strrchr($path,"/"),1);
echo $file_name;
?>