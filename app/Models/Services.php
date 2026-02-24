<?php

namespace App\Models;

use CodeIgniter\Model;

class Services extends Model
{
    protected $table            = 'services';
    protected $primaryKey       = 'id';
    protected $allowedFields = [
        'name', 
        'description',
        'details',
        'image',
        'sequence',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
