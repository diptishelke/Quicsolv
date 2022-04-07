<?php

namespace App\Controllers;

use App\Models\Usermodel;
use App\Controllers\BaseController;
use Hash;

class Login extends BaseController
{

    public function login()
    {
        return view('login-form');
    }
    public function submit()
    {
        $pswverify = "pswverify()";
        $usrmodel = new Usermodel();
        $data['table'] = $usrmodel->findAll();
        $result = $usrmodel->where('email', $this->request->getvar('email'))->first();
        $usrmodel->pswverify($this->request->getvar('password'), $result['password']);
        $session = session();
       // if (password_verify($pswverify['password'], $result['password'])) {
       //     return view('userprofile', $data);
       // } else {
        //    $session->setFlashdata('login', 'login failed');
        //}

        if ($result) {
            $session->setFlashdata('login', 'login Succesfully');
            $session->set('user', $result[('name')]);

            return view('userprofile', $data);
        } else {
            $session->setFlashdata('login', 'login Failed!');
            return view('login-form');
        }
    }
    public function myaccount()
    {
        $usrmodel = new Usermodel();
        $data['table'] = $usrmodel->findAll();

        $session = session();

        if ($session->has('user')) {

            return view('userprofile', $data);
        } else {

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
        $data = [
            'name' => $this->request->getvar('name'),
            'last-name' => $this->request->getvar('last-name'),
            'phone' => $this->request->getvar('phone'),
            'email' => $this->request->getvar('email'),
        ];
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
