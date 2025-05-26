<?php
    $file = fopen("ds.txt", 'w');
    $text = "Digital School";
    fwrite($file, $text);
?>