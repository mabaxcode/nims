<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '../vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class SpreadsheetController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Rekod_model', 'DbRekod');
    }

    public function export() {

        $requestData = $this->input->post();
        echo "<pre>"; print_r($requestData); echo "</pre>"; exit;

        $data = $this->DbRekod->generate_csv_by_filter($requestData);

        $data = [
            ['name' => 'John Doe', 'email' => 'john.doe@example.com']
        ];

        // Create a new spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set data in the spreadsheet
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'UNIT/WAD');
        $sheet->setCellValue('C1', 'NAMA');
        $sheet->setCellValue('D1', 'GRED');
        $sheet->setCellValue('E1', 'NO K/P');
        $sheet->setCellValue('F1', 'UMUR');
        $sheet->setCellValue('G1', 'BANGSA');
        $sheet->setCellValue('H1', 'TARIKH LANTIKAN KKM');
        $sheet->setCellValue('I1', 'TARIKH KENAIKAN PANGKAT');
        $sheet->setCellValue('J1', 'TARIKH BERSARA');
        $sheet->setCellValue('K1', 'NO LJM');
        $sheet->setCellValue('L1', 'TARIKH LAPOR DIRI KE HSNI');
        $sheet->setCellValue('M1', 'POS BASIK 1');
        $sheet->setCellValue('N1', 'TAHUN');
        $sheet->setCellValue('O1', 'POS BASIK 2');
        $sheet->setCellValue('P1', 'TAHUN');
        $sheet->setCellValue('Q1', 'POS BASIK 3');
        $sheet->setCellValue('R1', 'TAHUN');
        $sheet->setCellValue('S1', 'TELEFON');
        $sheet->setCellValue('T1', 'EMAIL');


        // Set background color for header cells
        $headerStyle = $sheet->getStyle('A1:C1');
        $headerStyle->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $headerStyle->getFill()->getStartColor()->setARGB('FFFFFF00'); // Red background color (ARGB format)

        // Populate data rows
        $row = 2; // Start from the second row
        $count = 1;
        foreach ($data as $item) {

            $sheet->setCellValue('A' . $row, $count);
            $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

            $sheet->setCellValue('B' . $row, $item['name']);
            $sheet->setCellValue('C' . $row, $item['email']);
            $row++;
            $count++;
        }

        // Write the spreadsheet to an XLSX file
        $writer = new Xlsx($spreadsheet);

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="example.xlsx"');
        $writer->save('php://output');
    }
}
