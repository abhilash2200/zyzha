<?php

namespace App\Controllers;

class Site_under_construction extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Site under construction';
        $meta_keyword = '';
        $meta_description = 'Zhyzha';
        $data['noindex'] = '<meta name="robots" content="noindex, nofollow">';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('site_under_construction',$data);
    }
    
}