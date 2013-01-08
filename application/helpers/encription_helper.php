<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('encoded_string'))
{
	function encoded_string($string, $symbol, $length)
	{
		$CI_1 =& get_instance() ;
		$CI_1->load->helper('string') ;
		
		$array = array(random_string('alnum', $length), $string, random_string('alnum', $length)) ;
		
		return urlencode(implode($symbol, $array)) ;
	}
}

if ( ! function_exists('decoded_string'))
{
	function decoded_string($string, $symbol)
	{
		$CI_1 =& get_instance() ;
		$CI_1->load->helper('string') ;
		
		$str = explode($symbol, urldecode($string)) ;
		
		return $str[1] ;
	}
}