<?php
include "CalculatePatas.php";
include "Mostrarpatas.php";
class Animales{
    private $animals;
    public function __construct($animals=[])
    {
        $this->animals=$animals;
    }
    public function getAnimals(){
        return $this->animals;
    }
}
//creamos los objetos
$animales=new Animales(["gallina"=>2,"patos"=>4,"ovejas"=>4]);
$calcularPatas=new CalculatePatas();
$mostrarPatas=new MostrarPatas();
//hacemos la suma de las patas
$calcularPatas->sum($animales->getAnimals());
//obtemos el valor de la suma
$sumaT=$calcularPatas->getSum();
//mostramos el valor de la suma
echo $mostrarPatas->printSuma($sumaT);
//mostramos en json el valor de la suma
echo "<p> metodo con JSON : ".$mostrarPatas->jsonTotalPatas($sumaT);

?>