<?php

namespace App\Controllers;

class Thankyou extends BaseController
{
    public function index(): string
    {
        $meta_title = 'terms & conditions';
        $meta_keyword = '';
        $meta_description = 'Zhyzha';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('thankyou',$data);
    }
    
}