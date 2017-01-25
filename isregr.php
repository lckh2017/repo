<?php

function isnumber($x){
    if($x == "0") return 1;
    if (($x > 0)||($x < 0))return 1;
    return 0;
}

if ($argc == 1) die("no arguments");

$b = 1;

for ($i = 1; $i <= $argc - 1; $i++){
	if(!(isnumber($argv[$i]))) $b = 0; 
}

if ($b == 0 ) die("arguments are not numbers");

if($argc == 2) die("there is only 1 argument");

$diff = $argv[2] - $argv[1];

$aout = "arithmetic progression";

for($i = 1; $i <= $argc - 2; $i++){
    if(!($argv[$i+1] - $argv[$i] == $diff))
        $aout = "not an arithmetic progression";
}

if($argc == 3){
	if(($argv[1] == 0)&&(!($argv[2] == 0))) $gout = "not a geometric progression";
		else $gout = "geometric progression";
}

if($argc > 3){
	if($argv[1] == 0){
		$b = 1;
		for ($i = 2; $i <= $argc - 1; $i++){
			if(!($argv[$i] == 0)) $b = 0; 
		}
		if($b == 0) $gout = "not a geometric progression";
			else $gout = "geometric progression";
	}
	if(!($argv[1] == 0)){
		$coef = $argv[2]/$argv[1];
		$gout = "geometric progression";
		for($i = 2; $i <= $argc - 1; $i++){
			if(!($argv[$i] == $argv[$i - 1]*$coef)) $gout = "not a geometric progression";
		}
	}
}

$out = $aout."; ".$gout;

echo $out;

?>