<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usermodel;
use CodeIgniter\Files\File;

class Register extends BaseController
{
    public function register()

    {


        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $check = $this->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        if (!$check) {
            return view('/register-form', ['validation' => $this->validator]);
        } else {
            $model = new UserModel();
            $imagename = $this->request->getFile('image');


            $data = [
                'name' => $this->request->getVar('name'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'image' => $imagename,
            ];
            $model->insert($data);
            return $this->response->redirect(site_url('Register/signup'));
        }
    }

    public function signup()
    {
        return view('login');
    }
    public function submit()
    {
        $data = [];

        $usrmodel = new Usermodel();
        $result = $usrmodel->where('email', $this->request->getvar('email'))->first();
        $password = $usrmodel->pswverify($this->request->getvar('password'), $result['password']);
        //print_r($result);exit;
        $session = session();
        if ($password) {
            $session->set('login', $result);
            $session->set('user', $result[('name')]);
            $session->set('name', $result[('lastname')]);
            $session->set('phone', $result[('phone')]);
            $session->set('email', $result[('email')]);
            $session->set('image', $result[('image')]);

            return view('homeview', $data);
        } else {
            $session->setFlashdata('login', 'Invalid details entered!');
            return view('login');
        }

        //print_r($uniid);exit;
    }
    public function homeview()
    {

        $uniid['row'] = session()->get('login');
        return view('homeview',$uniid);
    }


    public $usermodel;

    public function index()
    {
        $uniid['row'] = session()->get('login');

        $usrmodel = new Usermodel();

        return view('myprofile', $uniid);
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login');
    }
    public function edit()
    {

        $uniid['row'] = session()->get('login');

        //print_r($uniid);exit;
        return view('edit', $uniid);
    }
    public function update()
    {
        $usermodel = new Usermodel();
        $session = session();
        $img = '';
        $files = $this->request->getFile("image");
        $data = [];
        if (!$files->isValid()) {

            $id = $this->request->getVar('id');
          
           
            $data = [
                'name' => $this->request->getVar('name'),
                'lastname' => $this->request->getVar('lastname'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'city' => $this->request->getVar('city'),
                'country' => $this->request->getVar('country'),
                'state' => $this->request->getVar('state'),
                'pincode' => $this->request->getVar('pincode'),




            ];
        } else {

            $file = $files->move('public/asset/images/', $files->getClientName());
            if ($files->hasMoved()) {
                $img = $files->getName();
            }
            $data = [
                'name' => $this->request->getVar('name'),
                'lastname' => $this->request->getVar('lastname'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'city' => $this->request->getVar('city'),
                'country' => $this->request->getVar('country'),
                'state' => $this->request->getVar('state'),
                'pincode' => $this->request->getVar('pincode'),
                'image' => $img




            ];
        }
        if ($this->request->getpost('password') != '') {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        }
        $id = $this->request->getVar('id');
        session()->setFlashdata("Error","");
        $usermodel->update($id, $data);
       // return view('login');
       session()->setFlashdata("success","profile updated succesfully !");
        return redirect()->to(base_url()."/Register/homeview");
    }
    public function change_password()
    {
       
        return view('change_password');
    }
    public function update_password()
    {
        if(password_verify($this->request->getvar('oldpassword'),session()->get('login')['password']))
        {
            if($this->request->getvar('newpassword')===$this->request->getVar('confirmpassword')){
                if(!$this->usermodel->update(session()->get('login')['id'],['password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)]))
            {
                return redirect()->back()->with("Error","failed to change password,try again");

            }
            $usermodel = new Usermodel();
            $find=$this->usermodel->getwhere(['id'=>session()->get('login')['id']])->getRowArray();
            print_r($find);exit;
            session()->set('login',$find);
            session()->setFlashdata("success","password updated successfully");
            return redirect()->to(base_url()."/Register/index");

            }
            return redirect()->back()->with("Error","confirm password is not matched");

        }
        return redirect()->back()->with("Error","old password is not matched");
        

       
    }

    public function delete($id)
    {
        $usrmodel = new Usermodel();
        $usrmodel->where('id', $id)->delete();
        // return redirect()->to(site_url('userprofile'));
    }
}
