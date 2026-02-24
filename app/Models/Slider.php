<?php

namespace App\Models;

use CodeIgniter\Model;

class Slider extends Model
{
    protected $table            = 'sliders';
    protected $primaryKey       = 'id';
    protected $allowedFields = [
        'name', 
        'description',
        'details',
        'image',
        'seq',
        'created_at',
        'updated_at'
    ];
}
