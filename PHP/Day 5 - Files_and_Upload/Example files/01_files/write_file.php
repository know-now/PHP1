<?php

// In write mode, if the file doesn't exists, it will try to create it

// Two modes : 'w' override the content, 'a' to append
$file_handle = fopen("myfile.txt", "a");
$content = "The last batman wasnt that great.\r\n";

// Write inside the file
fwrite($file_handle, $content);

// Close the file
fclose($file_handle);

echo 'File created';
