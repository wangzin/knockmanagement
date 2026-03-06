<?php 
namespace App\Libraries;

use App\Models\AboutModel;
use App\Models\EmailTemplateModel;
use Exception;

class EmailHandler
{
    public function sendemail($data){
        $message_content=$data['_message'];
        $to = $data['cus_email'];
        $subject = $data['cus_subject'];
        $from=env('from_email');
        
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom($from);
        
        $email->setSubject($subject);
        $email->setMessage($message_content);
        if ($email->send()){
            echo 'Email successfully sent';
            return $data="Email Send successfully";
        } 
        else{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        return $data;
    }


}

