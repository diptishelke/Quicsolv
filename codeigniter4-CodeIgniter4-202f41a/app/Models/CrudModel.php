<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
	protected $table = 'user_tables';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name', 'email', 'phone','gender'];

}

?>