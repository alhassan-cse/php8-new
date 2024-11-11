<?php



class Promotion{
     
    public function __construct(public float $a = 0.00, public float $b= 0.00){
        return $this->a = $a;
    }
}


$obj = new Promotion(1.11, 2.22);
echo $obj->a;
?>