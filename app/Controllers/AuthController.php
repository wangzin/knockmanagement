<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AboutModel;
use App\Models\QuoteModel;
use App\Models\RegistrationModel;
use App\Models\UserModel;
class AuthController extends BaseController
{
    private function getgeneraldata(){
        $data=null;
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        return $data;
    }
    public function login(){
        $data=$this->getgeneraldata();
        return view('admin/login',$data);
    }

    public function admin_login(){
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();
        if($data){
            if($data['status']!=1){
                $session->setFlashdata('message', 'This user is marked as inactive. Please contact system adminstrator');
                return redirect()->to('/login');
            }
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id'                => $data['id'],
                    'user_name'         => $data['user_name'],
                    'email'             => $data['email'],
                    'role_id'           => $data['role_id'],
                    'contact_number'    => $data['contact_number'],
                ];
                $session->set($ses_data);
                return redirect()->to('/1622de66d3ea3e8fd5727ee63525a8f33f839055/2938c7f7e560ed972f8a4f68e80ff834');
            }else{
                $session->setFlashdata('message', 'Password is incorrect. Please provide correct password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('message', 'User doesnot exist against this user name. Please check and try again');
            return redirect()->to('/login');
        }
    }

    public function dashboard(){
        $data=$this->getgeneraldata();
        session()->setFlashdata('page', 'admin/pages/dashboard_content');
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        $registrationmodel=new RegistrationModel(); 
        $data['regiatration'] = $registrationmodel->findAll();
         $quotenmodel=new QuoteModel(); 
        $data['quote'] = $quotenmodel->findAll();
        return view('admin/dashboard',$data);
    }
    public function password_change(){
        $session = session();
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        $session->setFlashdata('page', 'admin/pages/change_password');
        return view('admin/dashboard',$data);
    }
    
    public function verify_current_password($curr_pass=null){
        $session = session();
        $userModel = new UserModel();
        $data = $userModel->where('email', $session->get('email'))->first();
        $authenticatePassword = password_verify($curr_pass, $data['password']);
        if($authenticatePassword){
            return json_encode(true);
        }else{
            return json_encode(false);
        }
    }
    
    public function update_user_password(){
        $session = session();
        $dataModel = new UserModel();
        $dataModel->where('id',$session->get('id'))
        ->set('password', password_hash($this->request->getVar('confirm_password'),PASSWORD_DEFAULT))->update();
        $session->setFlashdata('message', 'Password is updated.Please logout and login back');
        return redirect()->to('/1622de66d3ea3e8fd5727ee63525a8f33f839055/8df25be65e2e6d9d13ad84cd96b7f528');
    }

    public function loadprofilepage(){
        $session = session();
        $dataModel = new AboutModel();
        $data['abouts'] = $dataModel->first();
        $userModel = new UserModel();
        $data['data']  = $userModel->where('users.id', $session->get('id'))
        ->select('users.*')->first();
        $session->setFlashdata('page', 'admin/pages/view_profile');
        return view('admin/dashboard',$data);
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
