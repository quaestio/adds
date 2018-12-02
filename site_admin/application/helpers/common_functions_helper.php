<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('makeSafe'))
{
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
		
	}
}
		
function print_seo_link($str){
  	//if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
		//$str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
  	
	$str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
	$str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
	$str = strtolower( trim($str, '-') );
	return $str;
 
}
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
function genCode($seed_length=8) {
    $seed = "ABCDEFGHJKLMNPQRSTUVWXYZ234567892345678923456789";
    $str = '';
    srand((double)microtime()*1000000);
    for ($i=0;$i<$seed_length;$i++) {
        $str .= substr ($seed, rand() % 48, 1);
    }
    return $str;
}
function message_success($msg){
  $msg='<div class="alert alert-success alert-dismissable">
                           <i class="fa fa-check"></i>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                            <b>Success!</b> '.$msg.' </div>';
  return $msg;
}
function message_alert($msg){
  return'<div class="alert alert-danger alert-dismissable">
                           <i class="fa fa-check"></i>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                            <b>Alert!</b> '.$msg.' </div>';
   
}
function IsVideo($mime){
    $video_formats=array(
        "1"=>".webm",
        "2"=>"webm",
        "3"=>"mp4",
        "4"=> ".mp4",
    );
    
    return array_search($mime,$video_formats);
    
}
function facility_types($place_name=""){
    $facility_types=array("Hotels",
        "Restaurants",
        "Pub",
        "Bar",
        "Dancing clubs",
        "Night club",
        "Grocery stores",
        "Shopping centers",
        "Bazaar",
        "Pharmacies",
        "Hospital",
        "Railway Station",
        "Bas Stop",
        "School",
        "College",
        "Transport Faciloity",
        "Theatre",
        "Cinema hall",
        "Rent a Ride",
        "Cab Service"
        
        
    );
    return $facility_types;
}
?>