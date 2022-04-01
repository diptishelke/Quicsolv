<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\Query;


class Blog extends BaseController
{
   
    public function index()
    {
         
    }

    function savingdata()  
    {  
        echo "hisdfsdfsd";
        $db = db_connect();
        $query = $db->query('select * from blogs');
    //    echo "<pre>";
      //  print_r($query);exit;
     // print_r($query->getResult());
        foreach ($query->getResult() as $row) {
           // echo $row->blog_id;
           // echo $row->blog_title;
           // echo $row->blog_description;

       }
       $db = db_connect();
       $pQuery = $db->prepare(function ($db) {
           //echo "hii";
        return $db->table('blogs')->insert([
            'blog_id'    => '2',
            'blog_title'   => 'code',
            'blog_description' => 'laravel'
        ]);
    });
    // Collect the Data
$name    = 'John Doe';
$email   = 'j.doe@example.com';
$country = 'US';

// Run the Query
$results = $pQuery->execute($name, $email, $country);

echo $db->insertID();
    exit;
        $blogModel = new \App\Models\Blog();
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'blog_id'     => "1",
                        'blog_title'  =>  "code",
                        'blog_description'   => "codeigniter"
                        
                        );  
                        $blogModel->insert($data);
                      //  $data1 = array(  
                          //  'blog_id'     => "1",
                           // 'blog_title'  =>  "coding",
                            //'blog_description'   => "laravel"
                            
                           // );  
                        //$blogModel->replace($data1);
                       // $blogModel->where('blog_id', 1)->delete();
                       // $blogModel->update(1, $data);
}
}