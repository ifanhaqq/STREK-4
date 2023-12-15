<?php 
use PhpOffice\PhpSpreadsheet\IOFactory;

class Excel extends Controller
{
    public function upload()
    {
        //init data file
        $excel_nama = $_FILES['excelFile']['name'];
        $excel_temp = $_FILES['excelFile']['tmp_name'];

        if (is_uploaded_file($excel_temp)) {
            $spreadsheet = IOFactory::load($excel_temp);

            $data = $spreadsheet->getActiveSheet()->toArray();
            unset($data[0]);

            $kelas = $_SESSION['kelas'];

            foreach ($data as $row) {
                $nama = $row[0];
                $nisn = $row[1];
                $gender = $row[2];

                if ($this->model('Excel_model')->upload($nama, $nisn, $gender, $kelas) > 0) {
                    header('Location: ' . BASEURL . '/tabungan');
                } else {
                    
                }
            }
        }
    }
}