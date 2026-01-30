<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\IOFactory;

class SpreedSheetController extends Controller
{
    public function getPage(){
        $data = $this->formulaCalculator();
        print_r($data, true);
        return view('spreedsheet',["activeSidebarMain" => "spreedsheet", "bodyClass" => "sidebar_main_open sidebar_main_swipe", "data" => $this->formulaCalculator()]);
    }

    public function dontMessMeItsWork(Request $request){

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Get the active worksheet
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('BC5', '=0');
        $activeWorksheet->getStyle('BC5')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BC6', '=0.3');
        $activeWorksheet->getStyle('BC6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BC7', '=1');
        $activeWorksheet->getStyle('BC7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD5', '=1.2');
        $activeWorksheet->getStyle('BD5')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD6', '=1');
        $activeWorksheet->getStyle('BD6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD7', '=0');
        $activeWorksheet->getStyle('BD7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('C6', '61798739');
        $activeWorksheet->setCellValue('C7', '61798739');
        $activeWorksheet->setCellValue('C8', '139544838');
        $activeWorksheet->setCellValue('C9', '139544838');
        $activeWorksheet->setCellValue('C10', '=C6');

        $activeWorksheet->setCellValue('D6', '26904191.78');
        $activeWorksheet->setCellValue('D7', '59773031.23');
        $activeWorksheet->setCellValue('D8', '82941956');
        $activeWorksheet->setCellValue('D9', '118872037');
        $activeWorksheet->setCellValue('D10', '=SUM(D6:D9)');

        $activeWorksheet->setCellValue('E6', '=C6-D6');
        $activeWorksheet->setCellValue('E7', '=C7-D7');
        $activeWorksheet->setCellValue('E8', '=C8-D8');
        $activeWorksheet->setCellValue('E9', '=C9-D9');
        $activeWorksheet->setCellValue('E10', '=C10-D10');

        $activeWorksheet->setCellValue('F6', '=E6/C6');
        $activeWorksheet->getStyle('F6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F7', '=E7/C6');
        $activeWorksheet->getStyle('F7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F8', '=E8/C6');
        $activeWorksheet->getStyle('F8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F9', '=E9/C6');
        $activeWorksheet->getStyle('F9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F10', '=E10/C10');
        $activeWorksheet->getStyle('F10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('G6', '=0.15');
        $activeWorksheet->getStyle('G6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G7', '=0.15');
        $activeWorksheet->getStyle('G7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G8', '=0.15');
        $activeWorksheet->getStyle('G8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G9', '=0.15');
        $activeWorksheet->getStyle('G9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G10', '=0.15');
        $activeWorksheet->getStyle('G10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('H6', '=IFERROR(FORECAST(F6,OFFSET($BD$5:$BD$7,MATCH(F6,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F6,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H7', '=IFERROR(FORECAST(F7,OFFSET($BD$5:$BD$7,MATCH(F7,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F7,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H8', '=IFERROR(FORECAST(F8,OFFSET($BD$5:$BD$7,MATCH(F8,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F8,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H9', '=IFERROR(FORECAST(F9,OFFSET($BD$5:$BD$7,MATCH(F9,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F9,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H10', '=IFERROR(FORECAST(F10,OFFSET($BD$5:$BD$7,MATCH(F10,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F10,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        // Create a writer and save the file
        $writer = new Xlsx($spreadsheet);
        $writer->setPreCalculateFormulas(false);

        // Prepare headers for direct download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="hello_world.xlsx"');

        // Output the file to the browser
        // $writer->save('php://output');
        $filePath = storage_path('app/tes.xlsx');
        $writer->save($filePath);
        exit; // Important to exit after saving to prevent extra HTML output
    }

    public function formulaCalculator(){

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Get the active worksheet
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('BC5', '=0');
        $activeWorksheet->getStyle('BC5')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BC6', '=0.3');
        $activeWorksheet->getStyle('BC6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BC7', '=1');
        $activeWorksheet->getStyle('BC7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD5', '=1.2');
        $activeWorksheet->getStyle('BD5')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD6', '=1');
        $activeWorksheet->getStyle('BD6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('BD7', '=0');
        $activeWorksheet->getStyle('BD7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('C6', '61798739');
        $activeWorksheet->setCellValue('C7', '61798739');
        $activeWorksheet->setCellValue('C8', '139544838');
        $activeWorksheet->setCellValue('C9', '139544838');
        $activeWorksheet->setCellValue('C10', '=C6');

        $activeWorksheet->setCellValue('D6', '26904191.78');
        $activeWorksheet->setCellValue('D7', '59773031.23');
        $activeWorksheet->setCellValue('D8', '82941956');
        $activeWorksheet->setCellValue('D9', '118872037');
        $activeWorksheet->setCellValue('D10', '=SUM(D6:D9)');

        $activeWorksheet->setCellValue('E6', '=C6-D6');
        $activeWorksheet->setCellValue('E7', '=C7-D7');
        $activeWorksheet->setCellValue('E8', '=C8-D8');
        $activeWorksheet->setCellValue('E9', '=C9-D9');
        $activeWorksheet->setCellValue('E10', '=C10-D10');

        $activeWorksheet->setCellValue('F6', '=E6/C6');
        $activeWorksheet->getStyle('F6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F7', '=E7/C6');
        $activeWorksheet->getStyle('F7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F8', '=E8/C6');
        $activeWorksheet->getStyle('F8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F9', '=E9/C6');
        $activeWorksheet->getStyle('F9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('F10', '=E10/C10');
        $activeWorksheet->getStyle('F10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('G6', '=0.15');
        $activeWorksheet->getStyle('G6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G7', '=0.15');
        $activeWorksheet->getStyle('G7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G8', '=0.15');
        $activeWorksheet->getStyle('G8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G9', '=0.15');
        $activeWorksheet->getStyle('G9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('G10', '=0.15');
        $activeWorksheet->getStyle('G10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        $activeWorksheet->setCellValue('H6', '=IFERROR(FORECAST(F6,OFFSET($BD$5:$BD$7,MATCH(F6,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F6,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H6')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H7', '=IFERROR(FORECAST(F7,OFFSET($BD$5:$BD$7,MATCH(F7,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F7,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H7')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H8', '=IFERROR(FORECAST(F8,OFFSET($BD$5:$BD$7,MATCH(F8,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F8,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H8')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        $activeWorksheet->setCellValue('H9', '=IFERROR(FORECAST(F9,OFFSET($BD$5:$BD$7,MATCH(F9,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F9,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H9')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
        // $activeWorksheet->setCellValue('H10', '=IFERROR(FORECAST(F10,OFFSET($BD$5:$BD$7,MATCH(F10,$BC$5:$BC$7,1)-1,0,2),OFFSET($BC$5:$BC$7,MATCH(F10,$BC$5:$BC$7,1)-1,0,2)),"")');
        $activeWorksheet->getStyle('H10')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);

        // Create a writer and save the file
        $writer = new Xlsx($spreadsheet);
        $writer->setPreCalculateFormulas(false);

        // Prepare headers for direct download
        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename="hello_world.xlsx"');

        // Output the file to the browser
        // $writer->save('php://output');
        $filePath = storage_path('app/tes.xlsx');
        $writer->save($filePath);

        $spreadsheet = IOFactory::load($filePath);
        $worksheet = $spreadsheet->getActiveSheet();

        // Get the calculated result of a formula in cell E11
        $calculatedValue["H6"] = $worksheet->getCell("H6")->getCalculatedValue();
        $calculatedValue["H7"] = $worksheet->getCell("H7")->getCalculatedValue();
        $calculatedValue["H8"] = $worksheet->getCell("H8")->getCalculatedValue();
        $calculatedValue["H9"] = $worksheet->getCell("H9")->getCalculatedValue();
        $calculatedValue["H10"] = $worksheet->getCell("H10")->getCalculatedValue();

        return $calculatedValue; // Outputs the result (e.g., 100)
        exit; // Important to exit after saving to prevent extra HTML output
    }
}
