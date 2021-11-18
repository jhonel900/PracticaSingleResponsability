<?php
class MostrarPatas{
    public function printSuma($sum){
return "Calculo ejecutado \n\n Los animales suman {$sum} patas.";

}
public function jsonTotalPatas($sum){
    $json=array(
        'total patas'=>$sum,

    );
    return json_encode($json);
}

}
?>