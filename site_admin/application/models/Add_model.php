<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Model {
    
   
    
    public function record_count(){
        $sql="select * from add_manager where deleted='N'";
        return $this->db->query($sql)->num_rows();
        
    }
    public function add_list($start,$limit){
       
        $sql="select add_id,first_name, add_description, link, from_date, to_date, img_1, img_2, img_3, updated_by, DATE_FORMAT(add_manager.date_updated, '%d %b %y') as dt,add_manager.updated_by,add_manager.is_active
        from add_manager LEFT JOIN customers ON add_manager.customer_id=customers.customer_id  where  add_manager.deleted='N' order by add_id desc limit $start,$limit ";
      
        return $this->db->query($sql)->result_array();
       
    }
    
    
    
   
    public function save_add($obj)
    {
        $this->db->insert('add_manager',$obj);
        $add_id=$this->db->insert_id();
        return message_success('Adds Saved Successfully');
        
        
    }
    public function update_add($obj,$add_id)
    {
        
        $this->db->where('add_id',$add_id);
        $this->db->update('add_manager',$obj);
       
        return message_success('Adds Updated Successfully');
        
        
    }
    public function delete_add()
    {
        $tid=makeSafe($this->input->post('data_id'));
        $this->db->where('add_id',$tid);
        $this->db->update('add_manager',array('deleted'=>'Y','is_active'=>'N'));
        
        return 1;
        
    }
   
    
    public function pub_unpub()
    {
        $current_stat=$this->input->post('data_value')=="Y"?'N':'Y';
        $add_id= makeSafe($this->input->post('data_id'));
        
        $obj=array('is_active'=>makeSafe($current_stat));
        $this->db->where('add_id',$add_id);
        $this->db->update('add_manager',$obj);
        
        if($this->input->post('data_value')=="N")
            echo'<span class="label label-success"><a href="" class="btnPubUnpub text-white" data-id="'.$add_id.'" data-value="'.$current_stat.'"> Approved</a></span>';
            
            else
                echo'<span class="label label-warning"><a href="" class="btnPubUnpub text-white" data-id="'.$add_id.'" data-value="'.$current_stat.'"> Pending</a></span>';
                
                
                
    }
   
    public function customer_hint()
    {
        $sql="select first_name,customer_id,address_line_1,zip from customers where first_name like '%".$this->input->get('searchText')."%' order by first_name limit 0,10";
        return $this->db->query($sql)->result_array();
                
                
    }
    public function city_hint()
    {
        $sql="select city_name,city_id from cities where city_name like '%".$this->input->get('searchText')."%' order by city_name limit 0,10";
        return $this->db->query($sql)->result_array();
                
                
    }
   
    public function get_add_by_id($add_id)
    {
        $sql="select A.*,C.first_name,L.city_id,L.city_name from add_manager A,customers C, cities L where A.customer_id=C.customer_id and L.city_id=A.city_id and add_id=".$add_id;
        return $this->db->query($sql)->row_array();
                
                
    }
   
    public function upload_image(){
        $config['upload_path'] = '../site_img/adds';
        $config['allowed_types'] = 'gif|jpg|gpeg|png';
        $config['max_size']	= '10000';
        $config['overwrite'] = TRUE;
        $temp_file_name=temp_image_id();
        
        $config['file_name']  = $temp_file_name;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $dataRet['img_error']= $this->upload->display_errors();
            $dataRet['ImageUploaded']= false;
            $dataRet['ImageDetails']= '';
        }
        else
        {
            $this->db->select('img_1');
            $this->db->where('add_id', $this->input->post('obj_id'));
            $q=$this->db->get('add_manager');
            if($q->num_rows()>0)
            {
                $row=$q->row_array();
                @unlink('../site_img/adds/'.$row['img_1']);
                
            }
            
            $uploaded_data=$this->upload->data();
            $dataRet['ImageUploaded']= true;
            $mime=$uploaded_data['file_ext'] ;
            $data = array('img_1' => $temp_file_name.$mime);
            $this->db->where('add_id', $this->input->post('obj_id'));
            $this->db->update('add_manager', $data);
           
            $dataRet['image_id']=$temp_file_name.$mime;
            $dataRet['image_mime']=$temp_file_name.$mime;
            
        }
        return $dataRet;
    }
    
    
    
}
?>