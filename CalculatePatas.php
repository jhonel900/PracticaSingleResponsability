<?php
class CalculatePatas {
private $sum;

public function __construct()
{
$this->sum = 0;
}
public function sum($animals=[])
{
$this->sum = array_sum($animals);
}
public function getSum(){
    return $this->sum;
}

}

?>
