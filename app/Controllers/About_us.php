<?php

namespace App\Controllers;

class About_us extends BaseController
{
    public function index(): string
    {
        $meta_title = 'About Us | Our Mission, Vision & Values | Zyzha';
        $meta_keyword = '';
        $meta_description = 'What we do at Zyzha is to empower businesses with quick funding without any hassles. Learn about our mission, values, and commitment to financial growth.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('about_us',$data);
    }
}
