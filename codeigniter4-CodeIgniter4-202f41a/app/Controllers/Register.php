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
            if ($model->insert($data)) {

                $response = [
                    'success' => true,
                    'msg' => "User created",
                ];
            } else {
                $response = [
                    'success' => false,
                    'msg' => "Failed to create user",
                ];
            }
            return $this->response->setJSON($response);
            //echo (true);
            // exit;

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
            echo (true);
            exit;
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

        return view('profile', $uniid);
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
        if ($usermodel->update($id, $data)) {

            $response = [
                'success' => true,
                'msg' => "profile updated successfully ",
            ];
        } else {
            $response = [
                'success' => false,
                'msg' => "Failed to update profile",
            ];
        }
        return $this->response->setJSON($response);

        //session()->setFlashdata("success", "profile updated succesfully !");
       // echo (true);
       // exit;
        // return redirect()->to(base_url() . "/Register/index");
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
                    // $this->usermodel->updatedAt($email['id'])
                    if (!empty($userdata)) {

                        $userdata = $email['email'];
                        $to = $userdata;
                        $subject = 'ResetPasswordLink';
                        $token = $email['id'];
                        $message = 'Hi' . $email['name'] . '<br><br>'
                            . 'Your reset password request has been received.please click'
                            . 'the below link to reset your password.<br><br>'
                            . '<a href="' . base_url() . '/Register/recover_password/' . $token . '">  Click here to Reset Password </a><br><br>'
                            . 'Thanks<br>ABC';

                        $mail = \Config\Services::email();
                        $mail->setTo($to);
                        $mail->setFrom('diptishelke3399@gmail.com');
                        $mail->setSubject($subject);
                        $mail->setMessage($message);
                        $mail->SMTPDebug = 3;

                        if ($mail->send()) {

                            session()->setFlashdata('success', 'Reset password link sent to your registerd Email. please verify ', 3);
                            return redirect()->to(current_url());
                        } else {
                            $dat = $mail->printDebugger(['headers']);
                            print_r($dat);
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

        if ($this->request->getMethod()  == 'post') {
            $rules = [
                'password' => [
                    'label' => 'password',
                    'rules' => 'required|min_length[6]',

                ],
                'confirmpassword' => [
                    'label' => 'confirm password',
                    'rules' => 'required|matches[password]'

                ],
            ];
            $session = session();
            $usermodel = new Usermodel();
            if ($this->validate($rules)) {
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
                //print_r($password);exit;
                if ($this->request->getpost('password') != '') {
                    $id = $this->request->getVar('id');
                  
                   // session()->setFlashdata('success', 'Password Updated Successfully! ');
                   if ($usermodel->update($id, $data)) {

                    $response = [
                        'success' => true,
                        'msg' => "password updated successfully ",
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'msg' => "Failed to update password",
                    ];
                }
                return $this->response->setJSON($response);

                    //return redirect()->to(base_url() . "/Register/signup");
                } else {
                    session()->setFlashdata('error', 'Unable to update password');
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

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
            if ($this->request->getvar('password') === $this->request->getVar('confirmpassword')) {
                $session = session();
                $usermodel = new Usermodel();
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
                if ($this->request->getpost('password') != '') {
                    $id = $this->request->getVar('id');
                    if ($usermodel->update($id, $data)) {

                        $response = [
                            'success' => true,
                            'msg' => "password updated successfully ",
                        ];
                    } else {
                        $response = [
                            'success' => false,
                            'msg' => "Failed to update password",
                        ];
                    }
                    return $this->response->setJSON($response);
                }
            }
            return redirect()->back()->with("Error", "confirm password is not matched");
        }
        return redirect()->back()->with("Error", "old password is not matched");
    }
}
