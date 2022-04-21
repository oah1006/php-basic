<?php 

// echo readfile("text.txt");


// $myFile = fopen("text.txt", "r") or die("Can't open file" . $myFile);
// echo fread($myFile, filesize("text.txt"));
// echo fgets($myFile);
// fclose($myFile);

// while(!feof($myFile)) {
//     // echo fgets($myFile) . "<br/>";
//     echo fgetc($myFile) . "<br/>";
//     if (feof($myFile)) {
//         echo "end file";
//     }
// }
// fclose($myFile);
// ------------------read file

$myFile = fopen("newFile.txt", "a") or die("unable to open file");
// $txt = "Nhat Hao \n";
// fwrite($myFile, $txt);
// $txt = "Hao Tommy \n";
// fwrite($myFile, $txt);
// fclose($myFile); 
$txt = "Anh Hang \n";
fwrite($myFile, $txt);
fclose($myFile);
?>