<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
	protected $table = 'users';

	protected $primaryKey = 'id';

	protected $allowedFields = [ 'name','last-name','email','phone','password'];

	public function pswverify($password,$hash){
		
		
		 
          
		if (password_verify($password, $hash)) {
			return true ;
		} else {
			return false ;
		}

	}

}

?>