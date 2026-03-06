<?php

namespace App\Models;

use CodeIgniter\Model;

class Testimony extends Model
{
    protected $table            = 'testimony';
    protected $primaryKey       = 'id';
    protected $allowedFields = [
        'name', 
        'description',
        'image',
        'sequence',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];

}
