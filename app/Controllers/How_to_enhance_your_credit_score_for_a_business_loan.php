<?php

namespace App\Controllers;

class How_to_enhance_your_credit_score_for_a_business_loan extends BaseController
{
    public function index(): string
    {
        $meta_title = 'How to Enhance Your Credit Score for a Business Loan?';
        $meta_keyword = '';
        $meta_description = 'Learn how to boost your credit score to qualify for a business loan. Follow expert tips to enhance creditworthiness and secure better loan terms.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('how_to_enhance_your_credit_score_for_a_business_loan',$data);
    }
}