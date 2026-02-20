<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class WebsiteController extends BaseController
{
    public function index(){
        // $data=$this->getgeneraldata();
        // $dataModel = new Slider();
        // $response_data=$dataModel->findAll();
        // $data['slider_data'] = $response_data;
        // $testModel = new Testimony();
        // $data['testimonies']=$testModel->findAll();
        // $homeModel = new HomepageModel();
        // $data['home_data']=$homeModel->first();
        // $eventModel = new Services();
        // $data['firstevent']=$eventModel->where('sequence','1')->first();
        $data['page_name'] = 'home_page';
        return view('website/index',$data);
    }
}
