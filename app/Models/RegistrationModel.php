<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table            = 'registrations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'full_name', 
        'email', 
        'phone', 
        'start_date', 
        'worked_before', 
        'immigration_status', 
        'address', 
        'shift',
        'employment_status',
        'resume',
        'created_at',
        'updated_at',
        'updated_by'
    ];
}
