<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usermodel;
use CodeIgniter\Files\File;
use PHPMailer\PHPMailer\PHPMailer;

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
        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} field required',
                    'valid_email' => 'valid{field} required'
                ]

            ],
        ];
        $usermodel = new Usermodel();
        $result = $usermodel->where('email', $this->request->getvar('email'))->first();
        $password = $usermodel->pswverify($this->request->getvar('password'), $result['password']);
        //print_r($result);exit;
        $session = session();
        if ($password) {
            $session->set('login', $result);
            $session->set('user', $result[('name')]);

            //$session->setFlashdata('login', 'login successfully');

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
        return view('homeview', $uniid);
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
        return view('my_account', $uniid);
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
        session()->setFlashdata("Error", "");
        $usermodel->update($id, $data);
        // return view('login');
        session()->setFlashdata("success", "profile updated succesfully !");
        // return $this->response->redirect(site_url('/Register/homeview'));
        return redirect()->to(base_url() . "/Register/homeview");
    }
    public function forgot_password()
    {

        $data = [];
        if ($this->request->getMethod()  == 'post') {
            $rules = [
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => '{field} field required',
                        'valid_email' => 'valid{field} required'
                    ]

                ],
            ];
            $session = session();
            $usermodel = new Usermodel();
            if ($this->validate($rules)) {
                $email = $usermodel->where('email', $this->request->getpost('email'))->first();

                //print_r($email);exit;

                if (!empty($email)) {
                    //print_r($email['id']);exit;
                    $userdata = $email['email'];
                    if ($this->usermodel->updatedAt($email['id'])) {

                        $userdata = $email['email'];
                        $to = $userdata;
                        $subject = 'Reset Password Link';
                        $token = $email['id'];
                        $message = 'Hi' . $email['name'] . '<br><br>'
                            . 'Your reset password request has been received.please click'
                            . 'the below link to reset your password.<br>'
                            . '<a href="' . base_url() . '/Register/recover_password/' . $token . '">Click here to Reset Password</a><br><br>'
                            . 'Thanks<br>';

                        $email = \Config\Services::email();

                        $email->setTo($to);
                        $email->setFrom('diptishelke3399@gmail.com', 'mailtrap');
                        $email->setSubject($subject);
                        $email->setMessage($message);

                        if ($email->send()) {

                            session()->setFlashdata('success', 'Reset password link sent to your registerd Email. please verify with in 15 mins', 3);
                            return redirect()->to(current_url());
                        } else {
                            $data = $email->printDebugger(['headers']);
                            print_r($data);
                        }
                    } else {
                        $this->session->serFlashdata('error', 'Sorry!unable to update.Try again.');
                        return redirect()->to(current_url());
                    }
                } else {
                    session()->setFlashdata('error', 'Email does not exist');
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('forgot-password', $data);
    }

    public function recover_password()
    {

        return view('recover-password');
    }

    public function change_password()
    {
        $session = session();

        return view('change_password');
    }
    public function update_password()
    {
        if (password_verify($this->request->getvar('oldpassword'), session()->get('login')['password'])) {
            if ($this->request->getvar('newpassword') === $this->request->getVar('confirmpassword')) {
                $session = session();
                $usermodel = new Usermodel();
                if ($this->request->getpost('password') != '') {
                    $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
                    $usermodel = new Usermodel();
                    $password = session()->get('login')['password'];
                    $usermodel->update($password, $data);
                }
                session()->setFlashdata("success", "password updated successfully");
                return redirect()->to(base_url() . "/Register/homeview");
            }
            return redirect()->back()->with("Error", "confirm password is not matched");
        }
        return redirect()->back()->with("Error", "old password is not matched");
    }
}
