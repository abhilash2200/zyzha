<?php

namespace App\Controllers;

class Business_loan extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Easily Apply for Business Loans Up to ₹5 Cr | Zyzha';
        $meta_keyword = '';
        $meta_description = 'Apply for a business loan with Zyzha! Get quick funding, competitive rates, and easy approvals. Choose from working capital or MSME loans. Apply now!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('business_loan',$data);
    }
}