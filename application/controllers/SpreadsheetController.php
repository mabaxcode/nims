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

        $data = $this->DbRekod->dt_search_nurse($requestData);

        // Create a new spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet       = $spreadsheet->getActiveSheet();

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
        $sheet->setCellValue('N1', 'TARIKH BASIK 1');
        $sheet->setCellValue('O1', 'POS BASIK 2');
        $sheet->setCellValue('P1', 'TARIKH BASIK 2');
        $sheet->setCellValue('Q1', 'POS BASIK 3');
        $sheet->setCellValue('R1', 'TARIKH BASIK 3');
        $sheet->setCellValue('S1', 'TELEFON');
        $sheet->setCellValue('T1', 'EMAIL');


        // Set background color for header cells
        $headerStyle = $sheet->getStyle('A1:T1');
        $headerStyle->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $headerStyle->getFill()->getStartColor()->setARGB('FFFFFF00'); // Red background color (ARGB format)

        // Populate data rows
        $row = 2; // Start from the second row
        $count = 1;
        foreach ($data as $item) {

            $personal_info = get_any_table_row(array('user_id' => $item['user_id']), 'personal_info');

            $unit                   = get_ref_code('wad', $item['wad']);
            $name                   = $item['name'];
            $gred                   = get_ref_code('gred', $item['gred']);
            $no_kp                  = $item['no_kp'];
            $umur                   = $personal_info['umur'];
            $bangsa                 = $personal_info['bangsa'];
            $tarikh_lantikan        = $item['tarikh_lantikan'];
            $tarikh_naik_pangkat    = $item['tarikh_naik_pangkat'];
            $tarikh_bersara         = $item['tarikh_bersara'];
            $no_ljm                 = $item['no_ljm'];
            $tarikh_lapor_diri      = $item['tarikh_lapor_diri'];
            $pos_basik_1            = $item['pos_basik_1'];
            $tarikh_basik1          = $item['tarikh_basik1'];
            $pos_basik_2            = $item['pos_basik_2'];
            $tarikh_basik2          = $item['tarikh_basik2'];
            $pos_basik_3            = $item['pos_basik_3'];
            $tarikh_basik3          = $item['tarikh_basik3'];
            $phone_no               = $item['phone_no'];
            $email                  = $item['email'];


            $tarikh_lantikan_new = ($tarikh_lantikan == "0000-00-00") ? "-" : dmy($tarikh_lantikan);

            $tarikh_naik_pangkat_new = ($tarikh_naik_pangkat == "0000-00-00") ? "-" : dmy($tarikh_naik_pangkat);

            $tarikh_bersara_new = ($tarikh_bersara == "0000-00-00") ? "-" : dmy($tarikh_bersara);

            $tarikh_lapor_diri_new = ($tarikh_lapor_diri == "0000-00-00") ? "-" : dmy($tarikh_lapor_diri);

            $tarikh_basik1_new = ($tarikh_basik1 == "0000-00-00") ? "-" : dmy($tarikh_basik1);

            $tarikh_basik2_new = ($tarikh_basik2 == "0000-00-00") ? "-" : dmy($tarikh_basik2);

            $tarikh_basik3_new = ($tarikh_basik3 == "0000-00-00") ? "-" : dmy($tarikh_basik3);


            $sheet->setCellValue('A' . $row, $count);
            $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);



            $sheet->setCellValue('B' . $row, $unit);
            $sheet->setCellValue('C' . $row, $name);
            $sheet->setCellValue('D' . $row, $gred);
            $sheet->setCellValue('E' . $row, $no_kp);
            $sheet->setCellValue('F' . $row, $umur);
            $sheet->setCellValue('G' . $row, $bangsa);
            $sheet->setCellValue('H' . $row, $tarikh_lantikan_new);
            $sheet->setCellValue('I' . $row, $tarikh_naik_pangkat_new);
            $sheet->setCellValue('J' . $row, $tarikh_bersara_new);
            $sheet->setCellValue('K' . $row, $no_ljm);
            $sheet->setCellValue('L' . $row, $tarikh_lapor_diri_new);
            $sheet->setCellValue('M' . $row, $pos_basik_1);
            $sheet->setCellValue('N' . $row, $tarikh_basik1_new);
            $sheet->setCellValue('O' . $row, $pos_basik_2);
            $sheet->setCellValue('P' . $row, $tarikh_basik2_new);
            $sheet->setCellValue('Q' . $row, $pos_basik_3);
            $sheet->setCellValue('R' . $row, $tarikh_basik3_new);
            $sheet->setCellValue('S' . $row, $phone_no);
            $sheet->setCellValue('T' . $row, $email);


            $row++;
            $count++;
        }

        /*
        // Write the spreadsheet to an XLSX file
        $writer = new Xlsx($spreadsheet);

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="example.xlsx"');
        $writer->save('php://output');
        */

        // Save to a temporary file
        $tempFilePath = 'temp/export_' . time() . '.xlsx';
        $writer = new Xlsx($spreadsheet);
        $writer->save($tempFilePath);

        // Return file path as JSON
        echo json_encode(['file_url' => base_url($tempFilePath)]);
    }
}
