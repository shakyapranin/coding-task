<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Log;
class CSVOperationHelper
{
    /**
     * @param $file
     * @return array
     */
    public function toCsvArray($file)
    {
        $lines = explode(PHP_EOL, trim($file));
        $array = array();
        foreach ($lines as $line) {
             $array[] = explode(',', $line);
        }
        return $array;
    }


    /**
     * @param $file
     * @param $arrayIndex
     * @return array
     */
    public function removeArrayRow($file, $arrayIndex)
    {
        $file_array = $this->toCsvArray($file);
        foreach ($file_array as $key => $array) {
            $id_header = array_shift($array);
            if($id_header==$arrayIndex){
                unset($file_array[$key]); // Unset the row with id header to be removed
            }
        }
        return $file_array;
    }

    public function toCsvFile($array)
    {
        $modified_file_content = '';
        foreach ($array as $item) {
            $row = implode(',', $item);
            $modified_file_content .= $row.chr(10);
        }
        return $modified_file_content;
    }
}