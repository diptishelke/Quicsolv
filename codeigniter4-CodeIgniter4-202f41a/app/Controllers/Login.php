<?php

namespace App\Controllers;

use App\Models\FormModel;
use App\Controllers\BaseController;
use Hash;

class Login extends BaseController
{     
    
    public function login()
    {

     
            return view ('login-form');
                  
    }
      
           public function submit()
    {
      
          $model = new FormModel();
          $data['table']=$model->findAll();

           $result= $model->where('email',$this->request->getvar('email'))
           ->where('password',$this->request->getvar('password'))
           ->first();


           $session = session();

           if($result)
           {
            $session->setFlashdata('login','login Succesfully');
            $session->set('user',$result['name']); 
           
            return view ('my_account',$data);
            
           }
           else{
            $session->setFlashdata('login','login Failed!');
           
            return view ('login-form');
           }
           
        }
        public function myaccount()
        {
            $model = new FormModel();
            $data['table']=$model->findAll();

            $session = session();
           
            if($session->has('user'))
            {
               
                return view ('my_account',$data);
            }
            else{
                
                return view ('login-form');
            }
        }
        public function logout()
        {
         $session = session();
         $session->destroy();
         return view ('login-form');
 
 
        }


           
                      
       
            
      
           
     
        
             
       
       
      
      

       
          
          
         
       
}
