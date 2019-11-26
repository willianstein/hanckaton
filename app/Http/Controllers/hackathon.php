<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;

class hackathon extends Controller
{
    public function anagrama(Request $request)
    {
////        $palabra1  = c('notepad-online.txt');
//        $palavra1 = array();
//        $palavra2 = strtoupper($request->palavra);
//        $palavra1 = file('notepad-online.txt');
//        $ver = str_replace("\n", "", $palavra1);
//        $tamanhoDoArray = count($ver);
//
//        foreach ($ver as $f)
//
////            for ($i=0;$i<$tamanhoDoArray;$i++)
////            if(strlen($f) !== strlen($palavra2)) {
////            }
//                $pal1_array = str_split($f);
//                $pal2_array = str_split($palavra2);
//                $aux = "";
//
//                for ($i = 0; $i < count($pal1_array); $i++) {
//                    if (($val = array_search($pal1_array[$i], $pal2_array)) === false) {
//                        var_dump($palavra2);
//                    }
//                    //$aux.=$pal2_array[$val];
//                    unset($pal2_array[$val]);
//                }
//        print_r($pal1_array);
//
////           dd('aqui');
////            $f[] = strlen($b) !== strlen($palabra2);
//
////        dd($re,$t);
//        dd('fim');

        $palavra1 = strtoupper($request->palavra);
        $palavra2 = file('notepad-online.txt');
        $palavra2 = str_replace("\n", "", $palavra2);
//        $quant = count($palavra2);
        $pal1_array = str_split($palavra1);

        foreach ($palavra2 as $p) {
            $pal2_array[] = str_split($p);
        }
        $m = 0;
        $g = 0;
        foreach ($pal2_array as $r) {
            if (count($r) == count($pal1_array)){
                for ($i = 0; $i < count($pal1_array); $i++) {
                    if (($val = array_search($pal1_array[$i], $r)) === false) {
                       $g++;
                    }
                    unset($r[$val]);
                }
            }else
                $m++;
        }
        dd($g,$m);


//        for ($i = 0; $i < count($pal1_array); $i++) {
//            if (($val = array_search($pal1_array[$i], $r)) === false) {
//                dd('teste', $m, $g);
//            }
//            unset($r[$val]);
//        }
//        dd('s');
//
//
//        dd('tem');

        return view('processar', [

        ]);
    }
}









// esse funciona digitando as duas palavras

//$palavra1 = "roma";
//$palavra2 = "amro";
//if(strlen($palavra1) !== strlen($palavra2)){
//echo "no es anagrama desde principio";
//exit;
//}
//$pal1_array = str_split($palavra1);
//$pal2_array = str_split($palavra2);
//$aux = "";
//for($i=0; $i<count($pal1_array); $i++){
//    if( ($val = array_search($pal1_array[$i], $pal2_array))=== false ){
//        echo "não é um anograma"; exit;
//    }
//    //$aux.=$pal2_array[$val];
//    unset($pal2_array[$val]);
//
//}
//echo "é um anagrama";
//}
