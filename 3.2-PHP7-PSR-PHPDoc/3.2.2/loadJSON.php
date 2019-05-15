<?php
/**
 * function for JSON read
 *
 * @param string $fileName
 * @return mixed data from json file
 */

function loadJSON(string $fileName)
{
    $fullFileName = 'data/' . $fileName . '.json';
    $file = fopen($fullFileName, 'rt');
    $length = filesize($fullFileName);
    $data = json_decode(fread($file, $length));
    fclose($file);
    return $data;
};