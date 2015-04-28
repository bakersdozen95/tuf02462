<?php
	$fileName = "hits.txt";

	global $fileName;
	
	if (file_exists($fileName)) {
		$hits = file_get_contents($fileName);
	} else $hits = 0;
	$hits ++;
	file_put_contents($fileName, $hits);
	echo $hits;
?>