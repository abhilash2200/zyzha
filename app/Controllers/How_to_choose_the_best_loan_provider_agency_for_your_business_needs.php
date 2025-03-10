<?php

namespace App\Controllers;

class How_to_choose_the_best_loan_provider_agency_for_your_business_needs extends BaseController
{
    public function index(): string
    {
        $meta_title = 'How to Choose the Best Loan Provider Agency for Your Business Needs';
        $meta_keyword = '';
        $meta_description = 'Find the best loan provider agency for your business. Learn key factors to consider, compare options, and secure the right funding for your needs.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('how_to_choose_the_best_loan_provider_agency_for_your_business_needs',$data);
    }
}