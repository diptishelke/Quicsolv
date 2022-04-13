<?php

namespace App\Controllers;

use App\Models\Usermodel;
use CodeIgniter\Files\File;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        return view('homeview');
    }


    public function register()

    {
        $check = $this->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        if ($check) {
            return view('register', ['validation' => $this->validator]);
        } else {
            $model = new UserModel();

            $data = [
                'name' => $this->request->getVar('name'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'password' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT)

            ];

            $model->insert($data);
            return $this->response->redirect(site_url('Login/login'));
        }
    }

    public function login()
    {
        return view('login-form', ['errors' => []]);
    }
    public function submit()
    {
        $data = [];

        $usrmodel = new Usermodel();
        $data['table'] = $usrmodel->findAll();
        $result = $usrmodel->where('email', $this->request->getvar('email'))->first();
        $password = $usrmodel->pswverify($this->request->getvar('password'), $result['password']);
        $session = session();
        if ($password) {
            $session->set('user', $result[('name')]);
            
            return view('userprofile', $data);
            }
         else {
            $session->setFlashdata('login', 'Invalid details entered!');
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
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imagename = $file->getName();
            $file->move('assets/images/', $imagename);
        }
        $id = $this->request->getvar('id');
        $data = [
            'name' => $this->request->getvar('name'),
            'last-name' => $this->request->getvar('last-name'),
            'phone' => $this->request->getvar('phone'),
            'image' => $imagename,
            //'email' => $this->request->getvar('email'),
        ];
        //print_r($data);exit;

        if ($this->request->getpost('password') != '') {
            $data['password'] = $this->request->getvar('password');
        }
        $usrmodel->update($id, $data);
        return redirect()->to(current_url());
    }

    public function delete($id)
    {
        $usrmodel = new Usermodel();
        $usrmodel->where('id', $id)->delete();
        return redirect()->to(site_url('userprofile'));
    }
}
