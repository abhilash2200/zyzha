<?php

namespace App\Controllers;

class A_step_by_step_guide_to_applying_for_an_instant_business_loan extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Get an instant loan to quickly grow your business';
        $meta_keyword = '';
        $meta_description = 'Are you looking for an instant loan for growing your business? Read this blog to learn more about the steps involved in the process.';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_uri'] = service('uri')->getSegment(1);
        
        return view('a_step_by_step_guide_to_applying_for_an_instant_business_loan',$data);
    }
}