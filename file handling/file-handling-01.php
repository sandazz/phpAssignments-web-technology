<?php 
/*
$myfile = fopen("sample.txt","r") or die("unable to open the file.");
echo fread($myfile, filesize("sample.txt"));
fclose($myfile);

$myfile = fopen("sample.txt","w") or die("unable to open the file.");
$txt = "jonny depp\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("sample.txt","r") or die("unable to open the file.");
echo fread($myfile, filesize("sample.txt"));
fclose($myfile);


$myfile = fopen("sample.txt", "a") or die("unable to open the file");
$txt = "bbb\n";
fwrite($myfile, $txt);
$txt = "aaa\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("sample.txt","r") or die("unable to open the file.");
echo fread($myfile, filesize("sample.txt"));
fclose($myfile);
*/
$handle = fopen("sample.txt","r");
$text = "";
while(!feof($handle)){
    $text = fread($handle, 3);
    echo $text."<br>";
}
echo $text."<br>";
fclose($handle);
?>