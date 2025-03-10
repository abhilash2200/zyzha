<?php

namespace App\Controllers;

class Sitemap extends BaseController
{
    public function index(): string
    {
        $meta_title = 'sitemap';
        $meta_keyword = '';
        $meta_description = 'Zhyzha';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('sitemap',$data);
    }
    
}