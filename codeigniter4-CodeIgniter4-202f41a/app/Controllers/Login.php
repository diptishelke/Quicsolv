<?php

namespace App\Controllers;

use App\Models\FormModel;
use App\Controllers\BaseController;

class Login extends BaseController
{     
    
    public function login()
    {

     // echo"hii";exit();
            return view ('form');
      
           
          
          
        
    }

    public function submit()
    {
        try {
              
                  
       
            $model = new FormModel();
            $model->save([
            'email' => $this->request->getVar('email'),
            
            'password' => $this->request->getVar('password'),
            ]);
           
             
        }
        catch (\Exception $e) {
            die($e->getMessage());
        }
          
        $session = \Config\Services::session();

        $session->setFlashdata('success', 'login succesfully');
        return view ('my_account');
      

       // return $this->response->redirect('/my_account');
          
          
         
    }
}
