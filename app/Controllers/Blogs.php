<?php

namespace App\Controllers;

class Blogs extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Blog – Business Loan Insights & Financial Tips | Zyzya';
        $meta_keyword = '';
        $meta_description = 'Keep up with the latest expert business loan tips, industry trends, and financial insights. Find out more from Zyzhas blog on smarter funding decisions.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('blogs',$data);
    }
}
