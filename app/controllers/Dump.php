<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Dump extends Controller
{
    public function index()
    {
        $file_name = "test.xlsx";

        $load = IOFactory::load($file_name);

        $table = $load->getActiveSheet()->toArray();

        foreach ($table as $column) {
            $nama = $column[0];
            $nim = $column[1];

            echo $nama . " ";
        }


        // echo var_dump($table);

        
        
    }
}