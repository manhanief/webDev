<?php
//create test.txt with contain
$testFile = fopen("test.txt", "w") or die("Unable to open file!");
$name = "Khan";
$txt = "My name is $name\nI am ten years old\n"; 
fwrite($testFile, $txt);
$txt1 = "I love to play football";
fwrite($testFile, $txt1);
fclose($testFile);

//format for delete
$deletedFormat = '';

//read the entire string
$str=file_get_contents('test.txt');

//replace something in the file string - this is a VERY simple example
$str=str_replace($txt1, $deletedFormat,$str);
$name = "muhammad";
$newtext = "My name is $name\nI am ten years old\n";
$str=str_replace($txt, $newtext, $str);

//write the entire string
file_put_contents('test.txt', $str);
?>