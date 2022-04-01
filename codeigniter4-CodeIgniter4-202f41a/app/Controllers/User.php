<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function sign_up()
    {

        // $model = new UserModel();
        // print_r($model->findAll());

        helper(['form','url']);
        
        $validation = \Config\Services::validation();
        $check = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        if(!$check)
        {
            return view ('users/sign_up',['validation' => $this->validator]);
        }
        else
        {
            $model = new UserModel();
            $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'password' => $this->request->getVar('password'),
            ];

            $model->insert($data);

            return view ('users/sign_in');

            // return redirect()->back()->withInput(); 
        }
    }

    public function sign_in()
    {
        
    }
}
