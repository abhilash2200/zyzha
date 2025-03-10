<?php

namespace App\Controllers;

class Is_it_safe_to_obtain_business_loans_from_loan_aggregators extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Is It Safe to Obtain Business Loans from Loan Aggregators?';
        $meta_keyword = '';
        $meta_description = 'Discover the risks and benefits of obtaining business loans from loan aggregators. Learn how to choose a reliable platform for secure financing.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('is_it_safe_to_obtain_business_loans_from_loan_aggregators',$data);
    }
}