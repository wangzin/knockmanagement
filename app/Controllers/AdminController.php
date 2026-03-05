<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AboutModel;
use App\Models\CleaningProcess;
use App\Models\CleaningServices;
use App\Models\Excellence;
use App\Models\MenuModel;
use App\Models\QuoteModel;
use App\Models\RegistrationModel;
use App\Models\Services;
use App\Models\Slider;
use Exception;

class AdminController extends BaseController
{
    private $image_base_path;
    private $_image_path; 
    protected $db;
    public function __construct(){
        $this->db=db_connect();
        $this->image_base_path='images/';
        $this->_image_path='images/about/';
         //production
        //  $this->image_base_path='public/images/';
        // $this->_image_path='public/images/about/';
    }
    private function getgeneraldata(){
        $data=null;
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        return $data;
    }
    public function load_contact_logo(){
        $dataModel = new AboutModel();
        $data=$this->getgeneraldata();
        $data['data'] = $dataModel->first();
        session()->setFlashdata('page', 'admin/pages/about/contactlogo');
        return view('admin/dashboard',$data);
    }
    public function update_contact_logo_details(){
        $dataModel = new AboutModel();
        $logo_path=$this->request->getVar('imageid');
        if(!empty($_FILES["logo"]["name"])){
            $fle=$this->image_base_path.''.$this->request->getVar('imageid');
            if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['logo']['tmp_name'],$this->image_base_path.''.time().$_FILES["logo"]["name"]);
            $logo_path=time().$_FILES["logo"]["name"];
        }
        $update_data = [
            'contact' => $this->request->getVar('contact'),
            'address' => $this->request->getVar('address'),
            'email'  => $this->request->getVar('email'),
            'facebook'  => $this->request->getVar('facebook'),
            'twitter'  => $this->request->getVar('twitter'),
            'instegram'  => $this->request->getVar('instegram'),
            'linkin'  => $this->request->getVar('linkin'),
            'youtube'  => $this->request->getVar('youtube'),
            'logo'  =>$logo_path,
        ];
        $dataModel->update(1,$update_data);
        
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/49295c3e3b4155411b8f0c3f0044a22f');
    }

    public function load_organizationdetials(){
        $dataModel = new AboutModel();
        $data=$this->getgeneraldata();
        $data['data'] = $dataModel->first();
        session()->setFlashdata('page', 'admin/pages/about/organization');
        return view('admin/dashboard',$data);
    }
    public function update_organization_details(){
        $dataModel = new AboutModel();
        // $logo_path=$this->request->getVar('imageid');
        $image_path=$this->request->getVar('imageid');
        if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
            $fle=$this->_image_path.$this->request->getVar('imageid');
            if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['image']['tmp_name'],$this->_image_path.time().$_FILES["image"]["name"]);
            $image_path=time().$_FILES["image"]["name"];
        }
        $image_path2=$this->request->getVar('imageid2');
        if($_FILES["image2"]["name"]!="" && !empty($_FILES["image2"]["name"])){
            $fle1=$this->_image_path.$this->request->getVar('imageid2');
            if ($this->request->getVar('imageid2')!="" && file_exists($fle1)){
                unlink($fle1);
            }
            move_uploaded_file($_FILES['image2']['tmp_name'],$this->_image_path.time().$_FILES["image2"]["name"]);
            $image_path2=time().$_FILES["image2"]["name"];
        }
        $image_path3=$this->request->getVar('imageid3');
        if($_FILES["image3"]["name"]!="" && !empty($_FILES["image3"]["name"])){
            $fle2=$this->_image_path.$this->request->getVar('imageid3');
            if ($this->request->getVar('imageid3')!="" && file_exists($fle2)){
                unlink($fle2);
            }
            move_uploaded_file($_FILES['image3']['tmp_name'],$this->_image_path.time().$_FILES["image3"]["name"]);
            $image_path3=time().$_FILES["image3"]["name"];
        }
         $image_path4=$this->request->getVar('imageid4');
        if($_FILES["about_video"]["name"]!="" && !empty($_FILES["about_video"]["name"])){
            $fle3=$this->_image_path.$this->request->getVar('about_video');
            if ($this->request->getVar('about_video')!="" && file_exists($fle3)){
                unlink($fle3);
            }
            move_uploaded_file($_FILES['about_video']['tmp_name'],$this->_image_path.time().$_FILES["about_video"]["name"]);
            $image_path4=time().$_FILES["about_video"]["name"];
        }
        $update_data = [
            'org_name' => $this->request->getVar('org_name'),
            'about' => $this->request->getVar('about'),
            'vision'  => $this->request->getVar('vision'),
            'mission'  => $this->request->getVar('mission'),
            'location_map'  => $this->request->getVar('location_map'),
            'operation_hours'  => $this->request->getVar('operation_hours'),
            'welcome_note'  => $this->request->getVar('welcome_note'),
            'welcome_note1'  => $this->request->getVar('welcome_note1'),
            'image'  => $image_path,
            'image2'  => $image_path2,
            'image3'  => $image_path3,
            'about_video'  => $image_path4,
        ];
        $dataModel->update(1,$update_data);
        session()->setFlashdata('message', 'Organization details has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/f5a2f5ad159726f17d1d81f3fd594aed');
    }

    //Menus Nevigation bars in websites 
    public function load_manage_menu(){
        $data=$this->getgeneraldata();
        $dataModel = new MenuModel();
        $data['data'] = $dataModel->where('type','menu')->findAll();
        $data['max_seq'] = ($dataModel->selectMax('sequence')->first()['sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_menu');
        return view('admin/dashboard',$data);
    }
    public function create_menu(){
        $dataModel = new MenuModel();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($this->request->getVar('delete_image')!=null && $this->request->getVar('delete_image')!="null"){
                $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
            }
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'menu/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'has_submenu'  => $this->request->getVar('has_submenu')==null ? "No":$this->request->getVar('has_submenu'),
                'description'  => $this->request->getVar('description'),
                'sequence'  => $this->request->getVar('sequence'),
                'type'  => "menu",
                'image'  =>$image_path,
            ];

            if($this->request->getVar('has_submenu')=="Yes"){
                $update_data = [
                    'name'  => $this->request->getVar('name'),
                    'has_submenu'  => $this->request->getVar('has_submenu')==null ? "No":$this->request->getVar('has_submenu'),
                    'sequence'  => $this->request->getVar('sequence'),
                    'type'  => "menu",
                    'description'  => null,
                    'image'  =>null,
                ];
                $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
            }
            $session = session();
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
                $session->setFlashdata('message', 'Menu has been added successfully. Thank you');
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
                $session->setFlashdata('message', 'Menu has been updated successfully. Thank you');
            }
        }
        session()->setFlashdata('message', 'Menu detail has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/7462880e9eae014c37971f3760434652');
    }
    public function delete_menu(){
        $dataModel = new MenuModel();
        $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->where('id',$this->request->getVar('record_id'))->delete();
        $dataModel->where('menu_id',$this->request->getVar('record_id'))->delete();
        session()->setFlashdata('message', 'Menu detail has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/7462880e9eae014c37971f3760434652');
    }
    public function getmenudetailsbyid($id){
        $menumodel = new MenuModel();
        $data = $menumodel->where('id', $id)->first();
        return json_encode($data);
    }
    public function load_submenu($id){
        $data=$this->getgeneraldata();
        $dataModel = new MenuModel();
        $data['menu_data'] = $dataModel->where('id',$id)->first();
        $data['data'] = $dataModel->where('menu_id',$id)->findAll();
        $data['max_seq'] = ($dataModel->where('menu_id',$id)->selectMax('sub_sequence')->first()['sub_sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_submenu');
        return view('admin/dashboard',$data);
    }
    public function create_submenu(){
        $dataModel = new MenuModel();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($this->request->getVar('delete_image')!=null && $this->request->getVar('delete_image')!="null"){
                $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
            }
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'menu/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'menu/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $submenu_data = [
                'menu_id'  => $this->request->getVar('menu_id'),
                'name'  => $this->request->getVar('name'),
                'description'  => $this->request->getVar('description'),
                'sub_sequence'  => $this->request->getVar('sequence'),
                'type'  => "submenu",
                'image'  =>$image_path,
            ];
            $session = session();
            if($this->request->getVar('action_type')=="add"){
                $submenu_data = $submenu_data +['created_at' => date('Y-m-d h:i:sa')];
                try{
                    $response_data=$dataModel->insert($submenu_data);
                }catch(Exception $e){
                    var_dump($e);
                }
            }
            if($this->request->getVar('action_type')=="edit"){
                $submenu_data = $submenu_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$submenu_data);
            }
        }
        session()->setFlashdata('message', 'Sub Menu detail has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/089e4751c022eb462686ac9f4f296305/'.$this->request->getVar('menu_id'));
    }

    //Sliders 
    public function manage_slider(){
        $data=$this->getgeneraldata();
        $dataModel = new Slider();
        $response_data=$dataModel->findAll();
        $data['slider_data'] = $response_data;
        $data['max_seq'] = ($dataModel->selectMax('seq')->first()['seq'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_slider');
        return view('admin/dashboard',$data);
    }
    public function update_slider_type(){
        $dataModel = new AboutModel();
        $update_data = [
            'slider_title'  => $this->request->getVar('slider_title'),
            'slider_details'  => $this->request->getVar('slider_details'),
        ];
        $dataModel->update(1,$update_data);
        session()->setFlashdata('message', 'Detail has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e9883d615ca4a5bc0d3d3c91afe2d881');
    }
    public function update_slider(){
        $dataModel = new Slider();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'sliders/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'sliders/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'seq'  => $this->request->getVar('seq'),
                'description'  => $this->request->getVar('description'),
                'details'  => $this->request->getVar('details'),
                'image'  =>$image_path,
            ];
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
            }
        }
        session()->setFlashdata('message', 'Slider details has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e9883d615ca4a5bc0d3d3c91afe2d881');
    }
    public function get_slider_by_id($id){
        $menumodel = new Slider();
        $data = $menumodel->where('id', $id)->first();
        return json_encode($data);
    }
    public function delete_slider(){
        $dataModel = new Slider();
        $fle=$this->image_base_path.'sliders/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->delete($this->request->getVar('record_id'));
        session()->setFlashdata('message', 'Selected slider details has been deleted successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e9883d615ca4a5bc0d3d3c91afe2d881');
    }
    public function update_video_for_slider(){
        $dataModel = new AboutModel();
        $video_path='';
        if($_FILES["slidervideo"]["name"]!="" && !empty($_FILES["slidervideo"]["name"])){
            $fle=$this->image_base_path.'sliders/'.$this->request->getVar('slidervideoid');
            if ($this->request->getVar('slidervideoid')!="" && file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['slidervideo']['tmp_name'],$this->image_base_path.'sliders/'.time().$_FILES["slidervideo"]["name"]);
            $video_path=time().$_FILES["slidervideo"]["name"];
        }
        $update_data = [
            'video_slider'  => $video_path,
        ];
        $dataModel->update(1,$update_data);
        session()->setFlashdata('message', 'Video for slider has been updated successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e9883d615ca4a5bc0d3d3c91afe2d881');
    }

    //Cleaning Services 
    public function load_cleaning_services_page(){
        $data=$this->getgeneraldata();
        $dataModel = new CleaningServices();
        $data['data'] = $dataModel->findAll();
        $data['max_seq'] = ($dataModel->selectMax('sequence')->first()['sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_cleaning_services');
        return view('admin/dashboard',$data);
    }
    public function save_cleaning_services_details(){
        $dataModel = new CleaningServices();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'services/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'services/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'sequence'  => $this->request->getVar('sequence'),
                'description'  => $this->request->getVar('description'),
                'details'  => $this->request->getVar('details'),
                'image'  =>$image_path,
            ];
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
                session()->setFlashdata('message', 'Cleaning services details has been added successfully. Thank you');
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
                session()->setFlashdata('message', 'Cleaning services details has been updated successfully. Thank you');
            }
        }
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7256');
    }
    public function get_cleaning_services_by_id($id){
        $dataModel = new CleaningServices();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }
    public function delete_cleaning_services_details(){
        $dataModel = new CleaningServices();
        $fle=$this->image_base_path.'services/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->delete($this->request->getVar('record_id'));
        session()->setFlashdata('message', 'Cleaning services detail has been deleted successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7256');
    }


    //Services 
    public function load_services_page(){
        $data=$this->getgeneraldata();
        $dataModel = new Services();
        $data['data'] = $dataModel->findAll();
        $data['max_seq'] = ($dataModel->selectMax('sequence')->first()['sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_services');
        return view('admin/dashboard',$data);
    }
    public function save_services_detials(){
        $dataModel = new Services();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'services/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'services/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'sequence'  => $this->request->getVar('sequence'),
                'description'  => $this->request->getVar('description'),
                'details'  => $this->request->getVar('details'),
                'image'  =>$image_path,
            ];
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
                session()->setFlashdata('message', 'Services details has been added successfully. Thank you');
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
                session()->setFlashdata('message', 'Services details has been updated successfully. Thank you');
            }
        }
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7297');
    }
    public function get_services_by_id($id){
        $dataModel = new Services();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }
    public function delete_services_detials(){
        $dataModel = new Services();
        $fle=$this->image_base_path.'services/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->delete($this->request->getVar('record_id'));
        session()->setFlashdata('message', 'Services detail has been deleted successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7297');
    }

    //excellancy 
    public function load_excellancy_page(){
        $data=$this->getgeneraldata();
        $dataModel = new Excellence();
        $data['data'] = $dataModel->findAll();
        $data['max_seq'] = ($dataModel->selectMax('sequence')->first()['sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/manage_excellancy');
        return view('admin/dashboard',$data);
    }
    public function save_excellancy_details(){
        $dataModel = new Excellence();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'excellancy/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'excellancy/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'sequence'  => $this->request->getVar('sequence'),
                'description'  => $this->request->getVar('description'),
                'details'  => $this->request->getVar('details'),
                'image'  =>$image_path,
            ];
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
                session()->setFlashdata('message', 'Excellancy details has been added successfully. Thank you');
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
                session()->setFlashdata('message', 'Excellancy details has been updated successfully. Thank you');
            }
        }
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/866f61182ded2296d8d73bcbe8e24380');
    }
    public function get_excellancy_by_id($id){
        $dataModel = new Excellence();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }
    public function delete_excellancy_details(){
        $dataModel = new Excellence();
        $fle=$this->image_base_path.'excellancy/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->delete($this->request->getVar('record_id'));
        session()->setFlashdata('message', 'Excellancy detail has been deleted successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/866f61182ded2296d8d73bcbe8e24380');
    }

    public function load_cleaning_process_page(){
        $data=$this->getgeneraldata();
        $dataModel = new CleaningProcess();
        $data['data'] = $dataModel->findAll();
        $data['max_seq'] = ($dataModel->selectMax('sequence')->first()['sequence'])+1;
        session()->setFlashdata('page', 'admin/pages/website/cleaning_process');
        return view('admin/dashboard',$data);
    }
    public function save_cleaning_process_details(){
        $dataModel = new CleaningProcess();
        if($this->request->getVar('name')!=null){
            $image_path=$this->request->getVar('imageid');
            if($_FILES["image"]["name"]!="" && !empty($_FILES["image"]["name"])){
                $fle=$this->image_base_path.'cleaningprocess/'.$this->request->getVar('imageid');
                if ($this->request->getVar('imageid')!="" && file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['image']['tmp_name'],$this->image_base_path.'cleaningprocess/'.time().$_FILES["image"]["name"]);
                $image_path=time().$_FILES["image"]["name"];
            }
            $update_data = [
                'name'  => $this->request->getVar('name'),
                'sequence'  => $this->request->getVar('sequence'),
                'description'  => $this->request->getVar('description'),
                'details'  => $this->request->getVar('details'),
                'image'  =>$image_path,
            ];
            if($this->request->getVar('action_type')=="add"){
                $update_data = $update_data +['created_at' => date('Y-m-d h:i:sa')];
                $dataModel->insert($update_data);
                session()->setFlashdata('message', 'Process details has been added successfully. Thank you');
            }
            if($this->request->getVar('action_type')=="edit"){
                $update_data = $update_data +['updated_at' => date('Y-m-d h:i:sa')];
                $dataModel->update($this->request->getVar('record_id'),$update_data);
                session()->setFlashdata('message', 'Process details has been updated successfully. Thank you');
            }
        }
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/9ed6280103d930c543274dcb46af1fa9');
    }
    
    public function get_cleaning_process_by_id($id){
        $dataModel = new CleaningProcess();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }
    public function delete_cleaning_process_details(){
        $dataModel = new CleaningProcess();
        $fle=$this->image_base_path.'cleaningprocess/'.$this->request->getVar('imageid');
        if ($this->request->getVar('imageid')!="" && file_exists($fle)){
            unlink($fle);
        }
        $dataModel->delete($this->request->getVar('record_id'));
        session()->setFlashdata('message', 'Cleaning Process detail has been deleted successfully. Thank you');
        return redirect()->to('/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/9ed6280103d930c543274dcb46af1fa9');
    }

    public function load_application_page(){
        $data=$this->getgeneraldata();
        $dataModel = new RegistrationModel();
        $data['data'] = $dataModel->findAll();
        session()->setFlashdata('page', 'admin/pages/registration_page');
        return view('admin/dashboard',$data);
    }

    public function get_registration_by_id($id){
        $dataModel = new RegistrationModel();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }

    public function load_quote_page(){
        $data=$this->getgeneraldata();
        $dataModel = new QuoteModel();
        $data['data'] = $dataModel->findAll();
        session()->setFlashdata('page', 'admin/pages/quote_page');
        return view('admin/dashboard',$data);
    }
    
    public function get_quote_by_id($id){
        $dataModel = new QuoteModel();
        $data = $dataModel->where('id', $id)->first();
        return json_encode($data);
    }

    

}

