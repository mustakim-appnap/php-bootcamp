<?php

while(true) {

    echo "SHAWKI> ";

    $command = trim(fgets(STDIN));
    $parts = explode(' ', $command);
    $commandName = $parts[0];

    if ($command === 'exit') {
        break;
    }
    switch ($commandName) {
        case 'php-ls':
            $output = shell_exec('ls');
            echo $output . PHP_EOL;
            break;
        case 'php-mkdir':
            $directoryName = $parts[1] ?: '';
            if (!empty($directoryName)) {
                $output = shell_exec("mkdir $directoryName");
                echo "Directory created: $directoryName" . PHP_EOL;
            } else {
                echo "Please provide a directory name." . PHP_EOL;
            }
            break;
        default:
            echo "Invalid command.";
            break;
            
    }
}

?>