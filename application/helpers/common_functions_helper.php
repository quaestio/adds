<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function temp_image_id()
{
	$day = date('d', time());
	$month = date('m', time());
	$year = date('Y', time());
	$hour = date('H', time());
	$min = date('i', time());
	$sec = date('s', time());
	return $year.$month.$day.$hour.$min.$sec.rand(99,9999);
}
function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
function print_seo_link($url){
    $seo_patterns = array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/','/quot/');
    $seo_replace = array('', '-', '', '');
    
    $url = preg_replace($seo_patterns,$seo_replace,$url);
    $seo_name = strtolower($url);
    return $seo_name;
}
function makeSafe($string){
		$string=str_replace("'","",$string);
		$string=str_replace("\\","",$string);
		$string=str_replace("//","",$string);
		//$string=str_replace("-","",$string);
		$string=str_replace(")","",$string);
		$string=str_replace("(","",$string);
		$string=str_replace("0x27","",$string);
		$string=str_replace("0x7e","",$string);
		$string=str_replace("information_schema","",$string);
		
		
		$string=(get_magic_quotes_gpc() ? stripslashes($string) : $string);
		return ($string);
		/*if(function_exists('mysql_real_escape_string')){
			// send a trivial query to initiate mysql connection
			
			return mysql_real_escape_string($string);
		}else{
			return mysql_escape_string($string);
		}*/
	}

function create_session()
{
$day = date('d', time());
$month = date('m', time());
$year = date('Y', time());
$hour = date('H', time());
$min = date('i', time());
$sec = date('s', time());
$sid=$year.$month.$day.$hour.$min.$sec.rand(99,9999);
return $sid;

}


?>