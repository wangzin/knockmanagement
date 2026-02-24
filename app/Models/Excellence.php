<?php

namespace App\Models;

use CodeIgniter\Model;

class Excellence extends Model
{
    protected $table            = 'excellence';
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
