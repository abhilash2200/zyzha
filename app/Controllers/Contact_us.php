<?php

namespace App\Controllers;

class Contact_us extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Contact Us | Get in Touch with Zyzha';
        $meta_keyword = '';
        $meta_description = 'Do you need a business loan? Contact Zyzha for expert guidance, quick approvals, and customised financial solutions. We’re always there to helpyour business!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('contact_us',$data);
    }
}