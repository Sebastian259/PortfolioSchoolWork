<?php

function min_length($field, $length, $label=''){
	$str = post($field);
	if( empty($str) )
		return TRUE;
	if( mb_strlen($str) < $length )
		return sprintf(VALID_ERROR_MIN_LENGTH, $label, $length);
	return TRUE;
}

function max_length($field, $length, $label=''){
	$str = post($field);
	if( empty($str) )
		return TRUE;
	if( mb_strlen($str) >= $length )
		return sprintf(VALID_ERROR_MAX_LENGTH, $label, $length);
	return TRUE;
}

function valid_alpha($field, $label=''){
	$str = post($field);
	if( empty($str) )	return TRUE;

	$str = remove_accents($str);
	if( ctype_alpha($str) == false )
		return sprintf(VALID_ERROR_ALPHA, $label);
	return TRUE;
}

function valid_email($field, $label=''){
	$str = post($field);
	if( empty($str) )	return TRUE;

	if( filter_var($str, FILTER_VALIDATE_EMAIL) == false )
		return sprintf(VALID_ERROR_EMAIL, $label);
	return TRUE;
}




?>