<?php
// debugging
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $character = urldecode($_POST['character']);
    
    $jvcControl = "\"C:\\xampp\\htdocs\\theater-remote\\scripts\\jvc\\JvcControl.exe\"";

    if ($character != "") {
        exec("$jvcControl $character");

        // debugging
        file_put_contents('..\logs\jvc-commands.php.log', 'Character= ' . $character . "\n", FILE_APPEND);

        echo $character;
    }
} else {
    echo "Invalid request method.";
}
?>
