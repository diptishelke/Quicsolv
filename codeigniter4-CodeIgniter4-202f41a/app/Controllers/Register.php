<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Register extends BaseController
{   public function __construct()
{
    
}


    public function index(){
        return view ("register");
    }
}