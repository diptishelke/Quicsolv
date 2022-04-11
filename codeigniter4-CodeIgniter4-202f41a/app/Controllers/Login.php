<?php

namespace App\Controllers;

use App\Models\Usermodel;

use App\Controllers\BaseController;
use  hash;

class Login extends BaseController
{
    protected $helpers = ['form'];

    public function login()
    {
        return view('login-form', ['errors' => []]);
    }
    public function submit()
    { 
        $validationRule = [
            "email" => "required",
            "password" => "required"
        ];
        $usrmodel = new Usermodel();
        $data['table'] = $usrmodel->findAll();
        $result = $usrmodel->where('email', $this->request->getvar('email'))->first();
        $password = $usrmodel->pswverify($this->request->getvar('password'), $result['password']);
         // print_r($password);exit;

        $session = session();
        if ($password) {
            $session->setFlashdata('login', 'login Succesfully');
            $session->set('user', $result[('name')]);

            return view('userprofile', $data);
        } else {
            $session->setFlashdata('login', 'login Failed!');
            return view('login-form');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login-form');
    }
    public function edit($id)
    {
        $usrmodel = new Usermodel();
        $data['row'] = $usrmodel->where('id', $id)->first();
        return view('edit', $data);
    }
    public function update()

    {
        $usrmodel = new Usermodel();
        $id = $this->request->getvar('id');
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
       
        if (!$this->upload->do_upload('image')) {
            echo $this->upload->display_errors();
        } else {
            $fd = $this->upload->data();
            $fn = $fd['file_name'];
            $data = [
                'name' => $this->request->getvar('name'),
                'last-name' => $this->request->getvar('last-name'),
                'phone' => $this->request->getvar('phone'),
                'image' => $fn
                //'email' => $this->request->getvar('email'),
            ];
        }


        if ($this->request->getpost('password') != '') {
            $data['password'] = $this->request->getvar('password');
        }
        $usrmodel->update($id, $data);

        return redirect()->to(site_url('Login/login'));
    }

    public function delete($id)
    {
        $usrmodel = new Usermodel();
        $usrmodel->where('id', $id)->delete();
        return redirect()->to(site_url('userprofile'));
    }
}
