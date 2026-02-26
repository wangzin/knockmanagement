<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AboutModel;
use App\Models\CleaningProcess;
use App\Models\Excellence;
use App\Models\QuoteModel;
use App\Models\RegistrationModel;
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
    public function submit_registration(){
         if($this->request->getVar('g-recaptcha-response')){
            $seckey="6LfD3HgsAAAAAE4Oov-uSRb3ZuohRSSJVXjBqRAJ";
            $verify_response=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$seckey.'&response='.$this->request->getVar('g-recaptcha-response'));
            $response=json_decode($verify_response);
            if($response->success){
                if($this->request->getVar('form_type')=='registration'){
                    $image_path=$this->request->getVar('resume');
                    if($_FILES["resume"]["name"]!="" && !empty($_FILES["resume"]["name"])){
                        move_uploaded_file($_FILES['resume']['tmp_name'],'attachment/'.time().$_FILES["resume"]["name"]);
                        $image_path=time().$_FILES["resume"]["name"];
                    }
                    $form_data=[
                        'full_name'=>$this->request->getVar('full_name'), 
                        'email'=>$this->request->getVar('email'),  
                        'phone'=>$this->request->getVar('phone'),  
                        'address'=>$this->request->getVar('address'),  
                        'start_date'=>$this->request->getVar('start_date'),  
                        'worked_before'=>$this->request->getVar('worked_before'),  
                        'immigration_status'=>implode(',', $this->request->getVar('immigration_status')), 
                        'shift'=>implode(',', $this->request->getVar('shift')),
                        'employment_status'=>$this->request->getVar('employment_status'),
                        'resume'=>$image_path,
                        'created_at' => date('Y-m-d h:i:sa')
                    ];
                    $dataModel = new RegistrationModel();
                    $dataModel->insert($form_data);
                    session()->setFlashdata('message', 'Thank you for registrating with us! We received your information and will contact you when we are ready to start.');
                }
                if($this->request->getVar('form_type')=='quote'){
                   
                    $form_data=[
                        'full_name'=>$this->request->getVar('full_name'), 
                        'email'=>$this->request->getVar('email'),  
                        'phone'=>$this->request->getVar('phone'),  
                        'message'=>$this->request->getVar('message'),  
                        'created_at' => date('Y-m-d h:i:sa')
                    ];
                    $dataModel = new QuoteModel();
                    $dataModel->insert($form_data);
                    session()->setFlashdata('message', 'Thank you! Your quote request has been sent successfully. We’ll contact you shortly.');
                }
                
            }
        }
        
        return redirect()->to('/');
    }
    

    public function about_page(){
        $data=$this->getgeneraldata();
        $data['page_name'] = 'about_page';
        return view('website/index',$data);
    }
}
