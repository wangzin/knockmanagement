<?php

namespace App\Models;

use CodeIgniter\Model;

class CleaningProcess extends Model
{
    protected $table            = 'cleaning_process';
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
