<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

	

	public function article($seo_url)
	{
		 $sql="select article_title,page_keywords,article,page_description from articles A where A.is_active='Y' and A.seo_url='".makeSafe($seo_url)."'";
		return $this->db->query($sql)->row_array();
	
	}

	

	
}//class