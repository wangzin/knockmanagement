<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'menus';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 
        'has_submenu',
        'description',
        'image',
        'sequence',
        'created_at',
        'updated_at'
    ];
}
