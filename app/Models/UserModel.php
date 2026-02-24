<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'user_name',
        'role_id',
        'contact_number',
        'email',
        'password',
        'created_at',
        'image',
        'last_updated_at',
        'status'
    ];
}