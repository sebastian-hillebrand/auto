<?php

/**
 * 
 */
function get_type($string) {

	$return = '';

	$strpos = strpos($string, ':');

	if ($strpos !== false)
	{
    	$return = substr($string, 0, $strpos);
	}

	return $return;

}

/**
 * 
 */
function delete_type($string) {

	$return = $string;

	$strpos = strpos($string, ':');

	if ($strpos !== false)
	{
    	$return = substr($string, $strpos + 1);
	}

	return $return;

}
