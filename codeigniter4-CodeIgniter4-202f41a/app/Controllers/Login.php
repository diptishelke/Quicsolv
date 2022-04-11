<?php

namespace App\Controllers;

use App\Models\Usermodel;
use CodeIgniter\Files\File;
use App\Controllers\BaseController;

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
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imagename = $file->getRandomName();
            $file->move('uploads/', $imagename);
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
        return redirect()->to(site_url('Login/login'));
    }

    public function delete($id)
    {
        $usrmodel = new Usermodel();
        $usrmodel->where('id', $id)->delete();
        return redirect()->to(site_url('userprofile'));
    }
}
