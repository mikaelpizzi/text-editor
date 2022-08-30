<?php

// Declare a variable that represents the file
$file = 'test file.txt';

// Method to modify the file via GET request
file_put_contents($file, $_GET['text']);

// Method to get the file content
$text = file_get_contents($file);

?>

<h1>Text editor</h1>

<br />
<form>
<textarea style="width: 252px; height: 313px;" name="text"><?= $text ?></textarea>
<br />
<input type="submit" value="Save" />
</form>
