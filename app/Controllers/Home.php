<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Fast & Reliable Business Loans | Zyzha ';
        $meta_keyword = '';
        $meta_description = 'You can get business loans with quick approvals, minimal documentation, and multiple funding options. Secure the future of your business with Zyzha today!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('home',$data);
    }
    
}
