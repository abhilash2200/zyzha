<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $meta_title = 'Fast & Reliable Loans | Zyzha ';
        $meta_keyword = '';
        $meta_description = 'As a leading loan aggregator, we offer quick approvals, minimal documentation, and multiple funding options. A trusted loan provider like Zyzha is ready to help—apply today!';
  

        $data['meta_title'] = $meta_title;
        $data['meta_keyword'] = $meta_keyword;
        $data['meta_description'] = $meta_description;
        $data['page_name'] = '';
        
        return view('home',$data);
    }
    
}
