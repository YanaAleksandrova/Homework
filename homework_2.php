<?php

$array_number=range (20 , 1000, 37);



function find_3_prime () {
include 'is_prime.php';
	global $array_number;
	$count=0;
	foreach( $array_number as $number){
		
	if(is_prime( $number )){
       		$count++;
			}

 		if($count == 3){
		echo "$number </br>";
		break;
		}
}
}
function check_exists($array_number)
{
	if(in_array("146",$array_number))
	echo " The number 146 exist in the array </br>";
	else 
	echo "The number 146 does not exist in the array </br>";

	if(in_array("284",$array_number))
	echo "The number 284 exist in the array </br>";
	else 
	echo "The number 284 does not exist in the array </br>";

 	if(in_array("871",$array_number))
	echo "The number 871 exist in the array </br>";
	else 
	echo "The number 871 does not exist in the array </br>";
}



find_3_prime($array_number);
check_exists($array_number);



?>