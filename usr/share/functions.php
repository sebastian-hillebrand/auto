<?php

/**
 * 
 */
function get_type($string) {

	$strpos = strpos($string, ':');
	$return = '';

	if ($strpos !== false)
	{
    	$return = substr($string, 0, strpos($string, ':'));
	}

	return $return;

}

/**
 * 
 */
function delete_type($string) {

	$strpos = strpos($string, ':');
	$return = $string;

	if ($strpos !== false)
	{
    	$return = substr($string, strpos($string, ':') + 1);
	}

	return $return;

}
