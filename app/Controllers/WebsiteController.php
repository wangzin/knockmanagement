<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AboutModel;
use App\Models\CleaningProcess;
use App\Models\Excellence;
use App\Models\Slider;
use App\Models\Services;

class WebsiteController extends BaseController
{

    private function getgeneraldata(){
        $data=null;
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        return $data;
    }
    public function index(){
        $data=$this->getgeneraldata();
        $dataModel = new Slider();
        $response_data=$dataModel->findAll();
        $data['slider_data'] = $response_data;
        $slider1valies='';
        foreach($response_data as $sli1){
            $image_path=base_url().'images/sliders/'.$sli1['image'];
            $slider1valies=$slider1valies."{ src: '".$image_path."' },";
        }
        // $data['slider_type_1'] = $slidertypeModel->where('id','1')->first();
        $data['slider_data_1'] = rtrim($slider1valies,'","').'"';
        $cleaningprocess = new CleaningProcess();
        $data['processdata']=$cleaningprocess->orderBy('sequence','ASC')->findAll();
        $excellancyModel = new Excellence();
        $data['excellence']=$excellancyModel->orderBy('sequence','ASC')->findAll();
        $servicemodel = new Services();
        $data['services']=$servicemodel->orderBy('sequence','ASC')->findAll();
        $data['page_name'] = 'home_page';
        return view('website/index',$data);
    }
    public function quote_page(){
        $data=$this->getgeneraldata();
        $data['page_name'] = 'quote_page';
        return view('website/index',$data);
    }
    public function register_page(){
        $data=$this->getgeneraldata();
        $data['page_name'] = 'register_page';
        return view('website/index',$data);
    }
}
