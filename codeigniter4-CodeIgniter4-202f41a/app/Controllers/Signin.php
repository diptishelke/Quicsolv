<?php
namespace App\Controllers;
use App\Models\Usermodel;
use CodeIgniter\Files\File;
use App\Controllers\BaseController;

class Signin extends BaseController
{   public $usermodel;
    public $session;
    public function __construct()
    { 
        $this->usermodel = new Usermodel();
        $this->session = session();

        
    }
    public function index()
    {  $data = [];
        if ($this->request->getMethod()=='post')
        {
            $rules=[ 
                'email'=>'required|valid_email',
                'password'=>'required|min_length[5]|max_length[16]',
            ];
            if($this->validate($rules))
            {
                $email= $this->request->getVar('email');
                $password= $this->request->getVar('pass');

                $userdata= $this->usermodel->verifyEmail($email);
                if($userdata)
                {

                }
                else{
                    $this->session->setTempdata('error','Sorry! Email does not exists',3);
                    return redirect()->to(current_url());

                }
            }
                else
                {
                   $data['validation'] = $this->validator;
                }


            }
            return view('login-form',$data);

        }
        
    
    }
