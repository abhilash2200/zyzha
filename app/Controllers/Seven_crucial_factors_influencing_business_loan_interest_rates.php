<?php

namespace App\Controllers;

class Seven_crucial_factors_influencing_business_loan_interest_rates extends BaseController
{
    public function index(): string
    {
        $meta_title = '7 Key Factors Affecting Business Loan Interest Rates';
        $meta_keyword = '';
        $meta_description = 'Discover the 7 crucial factors that impact business loan interest rates and learn how to secure the best financing terms for your company.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('seven_crucial_factors_influencing_business_loan_interest_rates',$data);
    }
}