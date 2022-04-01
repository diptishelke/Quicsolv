<?php

namespace App\Controllers;

use App\Models\FormModel;
use App\Controllers\BaseController;

class Login extends BaseController
{     
    
    public function login()
    {

        try {
        helper(['form','url']);
        
        $validation = \Config\Services::validation();
        $check = $this->validate([
           
            'email' => 'required',
          
            'password' => 'required',
        ]);
        }
        catch (\Exception $e) {
            die($e->getMessage());
        }
        if(!$check)
        {
            return view ('form',['validation' => $this->validator]);
        }
        else
        {  
          
            $model = new FormModel();
            $data = [
            
            'email' => $this->request->getVar('email'),
            
            'password' => $this->request->getVar('password'),
            ];
        }
            $model->insert($data);
           

            return view ('/my_account');
          
            // return redirect()->back()->withInput(); 
        
    }

    public function sign_in()
    {
        
    }
}
