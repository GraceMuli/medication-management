<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Model extends CI_Model{
//for getting user details
public function getuserdetails($uid){
	$query=$this->db->select('FirstName,LastName,Email,MobileNumber,RegDate')
	->where('ID',$uid)
	->from('tbluser')
	->get();
	return $query->row();
}

//For updating user details
public function updateprofile($uid,$fname,$lname,$mobno){
$data=array(
'FirstName'=>$fname,
'LastName'=>$lname,
'MobileNumber'=>$mobno
);	
$query=$this->db->where('ID',$uid)
                ->update('tbluser',$data);
}


} 