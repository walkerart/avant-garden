<?php

$filename="imgs.txt";
$lines = array();
$file = fopen($filename, "r");
while($file && !feof($file)) {

    //read file line by line into a new array element
    $lines[] = fgets($file, 4096);
  
}
fclose ($file);

$done = 0;
$line = 0;
// hack to avoid user-removed images
while (!$done) {
	$line = rand(0,count($lines)-2);
	$data = explode(',',$lines[$line]);
	$url = trim($data[2]);
	exec("HEAD '$url' | grep Forbidden",$head);
	$head = $head[0];
	if ($head == '') {
		$done = 1;
	}
	//$done = 1;
}
#print_r($data);
header('Content-type: application/json');
?>
{
  "username": "<?= $data[1]; ?>",
  "url": "<?= $url; ?>"
}

