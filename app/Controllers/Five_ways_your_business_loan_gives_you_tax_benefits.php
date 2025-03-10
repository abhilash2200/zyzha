<?php

namespace App\Controllers;

class Five_ways_your_business_loan_gives_you_tax_benefits extends BaseController
{
    public function index(): string
    {
        $meta_title = '5 Ways Your Business Loan Gives You Tax Benefits';
        $meta_keyword = '';
        $meta_description = 'Discover how your business loan can reduce tax liability. Learn 5 key tax benefits, including deductions on interest, depreciation, and more.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('five_ways_your_business_loan_gives_you_tax_benefits',$data);
    }
}