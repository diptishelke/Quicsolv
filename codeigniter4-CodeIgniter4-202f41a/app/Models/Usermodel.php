<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
	protected $table = 'users';

	protected $primaryKey = 'id';

	protected $allowedFields = [ 'name','lastname','email','phone','password','image'];

	public function pswverify($password,$hash){
		   // echo "hii";exit;
		 
		if (password_verify($password, $hash)) {
			return true ;
			
		} else {
			return false ;
		}
		
	}
	public function getLoggedInUserData($id){
	$builder = $this->db->table('users');
		$builder->where('uniid',$id);
		$result=$builder->get();
		if(count($result->getResultArray())==1){
			return $result->getRow();

		}
		else{
			return false;
		}


	}

	
		
		 
      
	

}

?>