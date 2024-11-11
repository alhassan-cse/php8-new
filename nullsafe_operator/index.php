<?php



class Country{
     
    public function __construct(public ?User $user){
         
    }
}


 

class User{
     
    public function __construct(public string $name,){
       
    }
}


$obj = new Country(null);
echo $obj->user?->name;
?>
 