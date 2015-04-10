<?php

function get_command_type($array)
{
	$string = (isset($array[1]) ? $array[1] : '');
	$part = get_left($string);
	return ($string <> $part ? $part : '');
}

function get_command($array)
{
	$string = (isset($array[1]) ? $array[1] : '');
	$part = get_right($string);
	return $part;
}

function get_context_type($array)
{
	$string = (isset($array[2]) ? $array[2] : '');
	$part = get_left($string);
	return ($string <> $part ? $part : '');
}

function get_context($array)
{
	$string = (isset($array[2]) ? $array[2] : '');
	$part = get_right($string);
	return $part;
}

function get_target_type($array)
{
	$string = (isset($array[3]) ? $array[3] : '');
	$part = get_left($string);
	return ($string <> $part ? $part : '');
}

function get_target($array)
{
	$string = (isset($array[3]) ? $array[3] : '');
	$part = get_right($string);
	return $part;
}

function get_event_type($array)
{
	$string = (isset($array[4]) ? $array[4] : '');
	$part = get_left($string);
	return ($string <> $part ? $part : '');
}

function get_event($array)
{
	$string = (isset($array[4]) ? $array[4] : '');
	$part = get_right($string);
	return $part;
}

function get_path($command, $context, $context_type)
{
	$path = '';

	if ($command <> '' AND $context <> '' AND $context_type <> '')
	{
     	$path = $command . '/' . $context . '.' . $context_type;
	}
	elseif ($command <> '' AND $context <> '')
	{
	    $path = $command . '/' . $context;
	}
	elseif ($command <> '')
	{
	    $path = $command;
	}

	return $path;
}

/*********************/
/* Generic functions */
/*********************/

function get_left($string = 'left:right', $delimiter = ':')
{
	$strpos = strpos($string, $delimiter);

	if ($strpos !== false)
	{
    	$string = substr($string, 0, $strpos);
	}

	return $string;
}

function get_right($string = 'left:right', $delimiter = ':')
{
	$strpos = strpos($string, $delimiter);

	if ($strpos !== false)
	{
    	$string = substr($string, $strpos + 1);
	}

	return $string;
}
