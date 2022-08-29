<?php

// Declare a variable that represents the file
$file = 'test file.txt';

if(isset($_GET['file'])) { // If file input text is not empty, get the content
    $file = $_GET['file'];
    
    if ($_GET['action'] == 'Save') {  // If you click 'Save' button, save the file
        file_put_contents($file, $_GET['text']); // Method to modify the file via GET request
    }
}

// Method to get the file content
$text = file_get_contents($file);

?>

<h1>Text editor</h1>

<form>
    <label>File Name:</label>
    <input type="text" name="file" value="<?= $file ?>" /><br /><br />
    <textarea name="text"><?= $text ?></textarea><br />
    <input type="submit" value="Save" name="action" />
    <input type="submit" value="Open" name="action" />
</form>

<style>
    textarea {
        width: 252px; 
        height: 313px;
        margin-top: 10px;
        background-color: lightcyan;
    }
</style>