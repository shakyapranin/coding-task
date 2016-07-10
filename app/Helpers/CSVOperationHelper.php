<?php

namespace App\Helpers;

class CSVOperationHelper
{
    /**
     * @param $file
     * @return array
     */
    public function toCsvArray($file)
    {
        $lines = explode(PHP_EOL, $file);
        $array = array();
        foreach ($lines as $line) {
             $array[] = explode(',', $line);
        }
        return $array;
    }
}