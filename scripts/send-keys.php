<?php
// debugging
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $character = urldecode($_POST['character']);

    $autoitEXE = "\"C:\\Program Files (x86)\\AutoIt3\\AutoIt3.exe\"";
    $autoitScript = "\"C:\\xampp\\htdocs\\theater-remote\\scripts\\send_character.au3\"";
    exec("$autoitEXE $autoitScript $character > execution.log 2>&1", $output, $returnCode);

    // debugging
    file_put_contents('logs\send-keys.php.log', 'Code= ' . $returnCode . ', Character= ' . $character . "\n", FILE_APPEND);

    echo $character;
} else {
    echo "Invalid request method.";
}
?>
