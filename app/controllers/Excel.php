<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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

    public function tes()
    {

        $spreadsheet = new Spreadsheet();
        $activeSpreadsheet = $spreadsheet->getActiveSheet();
        $activeSpreadsheet->setCellValue('A1', 'Nama');
        $activeSpreadsheet->setCellValue('B1', 'NISN');
        $activeSpreadsheet->setCellValue('C1', 'Gender');
        $activeSpreadsheet->setCellValue('D1', 'Saldo');

        $writer = new Xlsx($spreadsheet);

        $writer->save('laporan/excel.xlsx');

        $filePath = 'laporan/excel.xlsx';

        if (file_exists($filePath)) {
            // Set appropriate headers for the file download
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));

            // Read the file and output its content
            readfile($filePath);
            exit;
        } else {
            echo "tidak ada file dengan nama $filePath";
        }
    }

    public function download($kelas, $tanggal)
    {
        $datas = $this->model('Tabungan_model')->getTabunganByGrade($_SESSION['kelas']);

        $spreadsheet = new Spreadsheet();
        $activeSpreadsheet = $spreadsheet->getActiveSheet();
        $activeSpreadsheet->setCellValue('A1', 'Nama');
        $activeSpreadsheet->setCellValue('B1', 'NISN');
        $activeSpreadsheet->setCellValue('C1', 'Gender');
        $activeSpreadsheet->setCellValue('D1', 'Saldo');

        $namaColumn = "A";
        $nisnColumn = "B";
        $genderColumn = "C";
        $saldoColumn = "D";
        
        $row = 2;
        
        foreach ($datas as $data) {
            $namaCell = $namaColumn . $row;
            $nisnCell = $nisnColumn . $row;
            $genderCell = $genderColumn . $row;
            $saldoCell = $saldoColumn . $row;

            $activeSpreadsheet->setCellValue($namaCell, $data['nama']);
            $activeSpreadsheet->setCellValue($nisnCell, $data['nisn']);
            $activeSpreadsheet->setCellValue($genderCell, $data['gender']);
            $activeSpreadsheet->setCellValue($saldoCell, $data['saldo']);

            $row++;
        }

        $writer = new Xlsx($spreadsheet);

        $filePath = "laporan/" . $tanggal . "_" . "kelas $kelas.xlsx";
        $writer->save($filePath);

        if (file_exists($filePath)) {
            // Set appropriate headers for the file download
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));

            // Read the file and output its content
            readfile($filePath);
            exit;
        } else {
            echo "tidak ada file dengan nama $filePath";
        }


    }

    public function dump($kelas, $tanggal)
    {
        echo "hari ini tanggal $tanggal untuk kelas $kelas";
    }
}