<?php

$file = 'test file.txt';

file_put_contents($file, $_GET['text']);

$text = file_get_contents($file);


?>

<h1>Text editor</h1>

<br />
<form>
<textarea style="width: 252px; height: 313px;" name="text"><?= $text ?></textarea>
<br />
<input type="submit" value="Save" />
</form>
