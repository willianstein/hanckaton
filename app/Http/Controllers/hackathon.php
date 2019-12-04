<?php

namespace App\Http\Controllers;

use App\Repositorio\BuscarPalavras;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\B;

class hackathon extends Controller
{
    public function anagrama(Request $request){
        $repo = new BuscarPalavras;

        // coloco o a palavra inserida em maiuscula
        $palavra1 = strtoupper($request->palavra);

        //pegar o arquivo enviado
        $palavra2 = file('notepad-online.txt');

      $valor=  $repo->buscarpalavra($palavra1,$palavra2);

      $anagramas = $repo->anagrama($palavra1,$valor);

       dd($anagramas);

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
