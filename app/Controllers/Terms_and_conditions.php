<?php

namespace App\Controllers;

class Terms_and_conditions extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Terms & Conditions for Loan Policies & Guidelines | Zyzha';
        $meta_keyword = '';
        $meta_description = 'Check on Zyzhas terms & conditions on offering business loan eligibility and funding rules. Keep an eye on borrowing rights and all responsibilities.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('terms_and_conditions',$data);
    }
    
}