<?php
    $files = glob("posters/*.*");
    $file = array_rand($files);
    
	//This does not handle if there is a file inside `posters/` that's not an image, and might break that is the case
    $imageInfo = getimagesize($files[$file]);
    header("Content-Type: ".$imageInfo['mime']);
    header("Content-Length: ".filesize($files[$file]));
    readfile($files[$file]);
?>