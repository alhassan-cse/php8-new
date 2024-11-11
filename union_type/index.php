<?php



class UnionType{
     
    public $a;
    // mixed == int, string, float, boolean
    public function __construct(mixed $a){
        return $this->a = $a;
    }
}


$obj = new UnionType("Sumon");
echo $obj->a;
?>