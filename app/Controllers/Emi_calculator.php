<?php

namespace App\Controllers;

class Emi_calculator extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Business Loan EMI Calculator to Plan Your Repayments | Zyzha ';
        $meta_keyword = '';
        $meta_description = 'Calculate your business loan EMIs instantly with Zyzhas easy-to-use EMI calculator. Its time to plan smart, borrow wisely, and manage repayments effortlessly.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('emi_calculator',$data);
    }
}