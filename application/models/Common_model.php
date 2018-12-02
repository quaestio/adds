<?php

class Common_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

  

    public function menues()
    {
        // $this->db->cache_on();
        $sql = "select menu_id,menu_name,seo_url from site_menus
        left join   articles on site_menus.article_id=articles.article_id where lavel=0 order by catorder";
        $array_index = 0;
        $display = array();
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $display[$array_index]['menu_name'] = $row->menu_name;
            $display[$array_index]['seo_url'] = $row->seo_url;
            $sqlSubMenu = "select menu_name,seo_url from site_menus,articles where site_menus.article_id=articles.article_id and lavel=1 and parent_id=" . $row->menu_id . " order by catorder";
            $querySub = $this->db->query($sqlSubMenu);
            $display[$array_index]['sub_menu'] = $querySub->result_array();
            $array_index = $array_index + 1;
        }
        
        return $display;
        // $this->db->cache_off();
    }

  function isLoggedIn()
    {
        return ($this->session->userdata('customer_id') == "") ? false : true;
    }

    public function clear_cache()
    {
        $this->db->cache_delete_all();
        echo 'System cache cleared';
    }

    
    public function get_state_name_from_id($state_id){
        $sqlC="SELECT state_name  FROM states where state_id=".$state_id."";
        $queryC= $this->db->query($sqlC);
        if($queryC->num_rows()>0)
        {
            $row=$queryC->row_array();
          return $row['state_name'];
            
        }
        else
           return "UN-KNOWN";
    }
    public function get_country_name_from_id($country_id){
        $sqlC="SELECT countries_name  FROM countries where country_id=".$country_id."";
        $queryC= $this->db->query($sqlC);
        if($queryC->num_rows()>0)
        {
            $row=$queryC->row_array();
            return $row['countries_name'];
            
        }
        else
           
           return "UN-KNOWN";
    }
    public function get_city_name_from_id($city_id){
        $sqlC="SELECT city_name  FROM cities where city_id=".$city_id."";
        $queryC= $this->db->query($sqlC);
        if($queryC->num_rows()>0)
        {
            $row=$queryC->row_array();
            return $row['city_name'];
            
        }
        else
           
           return "UN-KNOWN";
    }
    public function categories()
    {
        $sql = "select category_id ,category_name from category order by category_name";
        return $this->db->query($sql)->result_array();
    }
    public function country_list()
    {
        $sql = "select country_id ,countries_name from countries order by countries_name";
        return $this->db->query($sql)->result_array();
    }
    function states($country_id){
        $sql="select state_id,state_name from states where country_id=".$country_id." order by state_name";
        return $query = $this->db->query($sql)->result_array();
    }
    function cities($state_id){
        $sql="select city_id,city_name from cities where state_id=".$state_id." order by city_name";
        return $query = $this->db->query($sql)->result_array();
    }
   
    function sendSMS($to,$message)
    {
        
        
      
       
         $message=urlencode($message);
         $url='http://sms.jhargram.in/api/sms.php?uid=717561657374696f&pin=531de9283a30c&sender=&route=1&mobile=9474972525&message='.$message.'&pushid=1';
         
         $curl_handle=curl_init();
         curl_setopt($curl_handle,CURLOPT_URL,''.$url.'');
         curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
         curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
         $buffer = curl_exec($curl_handle);
         curl_close($curl_handle);
         if (empty($buffer))
         print "Nothing returned from url.<p>";
         
         else
         print $buffer;
         
    }
    function sendEmail($to,$subject,$message,$from='no-reply@quaestio.in',$senderName="",$attachment=null)
    {
       
       
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.quaestio.in',
            'smtp_port' => 25,
            'smtp_user' => 'no-reply@quaestio.in',
            'smtp_pass' => 'Sprihan#2012',
            'mailtype' => 'html',
            'charset'   => 'utf-8'
            );
       
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");
         $this->email->set_mailtype("html");
         $this->email->from($from,'www.quaestio.in');
         $this->email->reply_to($from);
         $this->email->to($to);
        
        $this->email->subject($subject);
        $this->email->message($message);
        
        if(!is_null($attachment)){
            $this->email->attach($attachment);
        }
       
        
        if (!$this->email->send())
        { //echo $this->email->print_debugger();
            return false;
           
        }
            
          else
          //{//echo $this->email->print_debugger();}
            return true;
            
    }
    /**
     * Add listing depending on position
     */
    public function adds($position_name){
        $sql="select A.add_id,A.add_description,A.link,A.img_1,C.org_name from add_manager A,customers C 
        where A.customer_id=C.customer_id 
            and ( NOW() between from_date and to_date ) 
            and ".$position_name."='Y'
            order by impression desc";
       
        return $this->db->query($sql)->result_array();
    }
} //
?>