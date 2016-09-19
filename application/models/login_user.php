
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model {
	


	public function user_login_d($email,$password)
	{  
	   $q=$this->db->where(['user_email'=>$email,'user_pass'=>$password])
	        ->get('borrow_user');     
	    if($q->num_rows())
	    {
             return $q->row()->id;

	    }else{

	    	return FALSE;
	    }
	}
}
