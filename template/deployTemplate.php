<?php


$dir	= '../';
$directories = scandir($dir);


//this copies it everywhere else that starts
//with a capital letter.

foreach($directories as $Value){

echo $Value . "<br>";
	if(ctype_upper(substr($Value,0,1)) == true){
	copy("index.php", "../$Value/index.php");
	}
}

?>