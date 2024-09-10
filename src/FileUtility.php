<?php

class FileUtility
{
    public static function write($filename, $data)
    {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }


    public static function read($filename)
    {
        if (!file_exists($filename)) {
            return [];
        }
        
        $file = fopen($filename, 'r');
        $data = [];
        while (($row = fgetcsv($file)) !== false) {
            $data[] = $row;
        }
        fclose($file);

        return $data;
    }
}
?>
