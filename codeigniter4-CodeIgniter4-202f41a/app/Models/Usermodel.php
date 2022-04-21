<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
	protected $table = 'users';

	protected $primaryKey = 'id';

	protected $allowedFields = [ 'name','lastname','email','phone','password','image','address','city','country','state','pincode'];

	public function pswverify($password,$hash){
		   // echo "hii";exit;
		 
		if (password_verify($password, $hash)) {
			return true ;
			
		} else {
			return false ;
		}
		
	}
	


	public function updatedAt($id){

		$builder= $this->db->table('users');
		$builder->where('id',$id);
		//print_r($id);exit;
		$builder->update(['updated_at'=>date('Y-m-d h:i:s')]);
		if($this->db->affectedRows()==1){
			return true;
		}
		else{
			return false;
		}
	}

	
		
		 
      
	

}

?>