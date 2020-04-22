<?php

include '../koneksi.php';

require '../vendor/autoload.php';

 

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Reader\Csv;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

 

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');



if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {

 

    $arr_file = explode('.', $_FILES['berkas_excel']['name']);

    $extension = end($arr_file);

 

    if('csv' == $extension) {

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

    } else {

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

    }

 

    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);

     

    $sheetData = $spreadsheet->getActiveSheet()->toArray();

	for($i = 1;$i < count($sheetData);$i++)

	{

        $Nama = $sheetData[$i]['1'];

        $Kordinat = addslashes($sheetData[$i]['2']);

        $Node = $sheetData[$i]['3'];

        $port_1 = $sheetData[$i]['4'];

        $port_2 = $sheetData[$i]['5'];

        $core_1 = $sheetData[$i]['6'];

        $core_2 = $sheetData[$i]['7'];

        $core_3 = $sheetData[$i]['8'];

        $core_4 = $sheetData[$i]['9'];

        $core_5 = $sheetData[$i]['10'];

        $core_6 = $sheetData[$i]['11'];

        $core_7 = $sheetData[$i]['12'];

        $core_8 = $sheetData[$i]['13'];

        $Ket = $sheetData[$i]['14'];

        

        mysqli_query($koneksi,"insert into data_spliter values ('','$Nama','$Kordinat','$Node','$port_1','$port_2','$core_1

             ','$core_2','$core_3','$core_4','$core_5','$core_6','$core_7','$core_8','$Ket')");

    }

    header("Location: mainclass1.php"); 

}

?>