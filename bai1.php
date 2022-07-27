<?php
class ExcerciseString {
    public $Check1;
    public $Check2;

    public function readFile($filename) {
        $file = fopen($filename, "r");
        $filetext = fread($file, filesize($filename));
        echo $filetext;
        return $filetext;
    }

    public function checkValidString($string) {
        $pos = strpos($string, "book");
        $pos1 = strpos($string, "restaurant");

        if ($pos === false && $pos1 !== false) {
            return true;
        }
        if ($pos !== false && $pos1 === false) {
            return true;
        }
        return false;
    }

    public function writeFile() {
        $file = fopen("result_file.txt", "w");
        fwrite($file, 'bai 1');
        fclose($file);
    }
}

