<?php

function animalSpeak( $animal ) {
	$sounds = array ( "cat" => "meow", "dog" => "woof", "mouse" => "squeak" );
	
	if ( array_key_exists( $animal, $sounds ) ) {
		return $sounds[$animal];
	} 
	else {
		return false;
	}
}
?>