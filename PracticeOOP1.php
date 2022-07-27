<?php
include ("bai1.php");

    function countt($sentence) {
        $result = substr_count($sentence, ".");
        return $result;
    
    }
    

    function writeFile($check1, $check2) 
    {
       $string = fopen('result_file.txt', 'w') ;
       
       $x = $check1 ? 'Hợp lệ' : 'Không hợp lệ';
       $check1 = "check1 là chuỗi $x.\n";
        fwrite ($string, $check1);

       $x = $check2 ? 'Hợp lệ' : 'Không hợp lệ';
       $check2 = "check2 là chuỗi $x. Chuỗi có ". countt("file2.txt") .' câu';
       fwrite ($string, $check2);
       fclose($string);

    }
   
$object1 = new ExcerciseString();
$a = "file1.txt";
$b = "file2.txt";
echo '<br>';
$check1 = $object1->checkValidString($object1->readFile($a));
echo '<br>';
$check2 = $object1->checkValidString($object1->readFile($b));
echo '<br>';
echo '<br>';
echo writeFile($object1->checkValidString($object1->readFile($a)), $object1->checkValidString($object1->readFile($b)));
echo writeFile($object1->checkValidString($object1->readFile($a)), $object1->checkValidString($object1->readFile($b))); 



