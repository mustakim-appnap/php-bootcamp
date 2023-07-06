<?php

$codes = [];
while (true) {

    echo "SAHW>>";

    $input = trim(fgets(STDIN));
    

    if($input == 'exit') break;

    $codes[]  = $input;
    
    ob_start();
    eval($input);
    $output = ob_get_clean();

    if($output === false) {
        echo "Error parsing code" . PHP_EOL;
    } else {
        echo $output . PHP_EOL;
    }

}

echo "Code History:" . PHP_EOL;
foreach ($codes as $code) {
    echo $code . PHP_EOL;
}
?>