<?php

// $value = 9.90;
// switch ($value) {
//   case "9.90":
//     echo "Good News!";
//     break;
//   case 9.90:
//     echo "Oh no Bad News!";
//     break;
   
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

$name = match(2.0) {
    '2.0' => 'String Two',
     2.0  => 'Float Two',
};

echo $name;

?>