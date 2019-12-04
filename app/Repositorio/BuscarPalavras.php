<?php


namespace App\Repositorio;


class BuscarPalavras
{
    public function buscarpalavra($palavra1,$palavra2){

        //retiro as quebras de linha pra trabalhar com o array
        $p2 = str_replace("\n","", $palavra2);

        $quatPalavra  =  strlen($palavra1);

        foreach ($p2 as $p){
            trim($p);
            if ( strlen($p) == $quatPalavra ){
                $pala[] = $p;

            }

        }
return $pala;
    }

    public function anagrama($palavra1,$palavra2){

        //tranformo a palavra enviada pelo usuario em um array
        $pal1 = str_split($palavra1);

        //criar um array da palavras do arquivo
        foreach ($palavra2 as $p) {
            $pal2_array[] = str_split($p);
        }

       // dd($pal2_array);
        foreach ($pal2_array as $r) {
             $are=   $this->verAnagrama($pal1,$r);
        }
        return $are;
    }

    public function verAnagrama($pala1,$pala2){
        for ($i = 0; $i < count($pala1); $i++) {
            if (($val = array_search($pala1[$i], $pala2)) === false) {
              return   $r = 'nao tem anagrama';
            }

            $er[] = ( $val);
            //unset;
        }
        return $er;

    }
}
