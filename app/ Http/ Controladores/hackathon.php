<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;

class hackathon extends Controller
{
    public function anagrama(Request $request)
    {

        // coloco o a palavra inserida em maiuscula
        $palavra1 = strtoupper($request->palavra);

        //pegar o arquivo enviado
        $palavra2 = file('notepad-online.txt');
        //retiro as quebras de linha pra trabalhar com o array
        $palavra2 = str_replace("\n", "", $palavra2);
//        $quant = count($palavra2);

        //tranformo a palavra enviada pelo usuario em um array
        $pal1_array = str_split($palavra1);

        //criar um array da palavras do arquivo
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


        return view('processar', [
            'quantidadeigual' =>$m,
            'quantidadedesigual'=>$g
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
