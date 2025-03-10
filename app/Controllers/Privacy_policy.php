<?php

namespace App\Controllers;

class Privacy_policy extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Privacy Policy for Secure & Confidential Lending | Zyzha';
        $meta_keyword = '';
        $meta_description = 'Your privacy matters! Read how Zyzha protects your personal and financial information with secure policies and transparent lending practices.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('privacy_policy',$data);
    }
    
}