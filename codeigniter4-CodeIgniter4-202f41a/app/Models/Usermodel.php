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

}

?>