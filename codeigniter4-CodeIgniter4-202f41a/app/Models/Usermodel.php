<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
	protected $table = 'users';

	protected $primaryKey = 'id';

	protected $allowedFields = [ 'name','last-name','email','phone','password','image'];

	public function pswverify($password,$hash){
		   // echo "hii";exit;
		 
		if (password_verify($password, $hash)) {
			return true ;
			
		} else {
			return false ;
		}
		
	}
	public function getloggedinuserdata($id){
		$builder = $this->db->table('users');
		$builder->where('uniid',$id);
		$res=$builder->get();
		if(count($res->getResultArray())==1){
			return $res->getRow();

		}
		else{
			return false;
		}


	}

	
		
		 
      
	

}

?>