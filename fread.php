<?php
    $filename = "ds.txt";
    $file = fopen($filename, "r");
    $filesize = filesize($filename);
    $fileread = fread($file, $filesize);
    echo $fileread."<br>".$filesize;
?>