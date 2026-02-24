<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'abouts';
    protected $primaryKey = 'id';
    protected $allowedFields = [
            'contact', 
            'email',
            'facebook',
            'twitter',
            'instegram',
            'linkin',
            'youtube',
            'about' ,
            'vision',
            'mission',
            'org_name',
            'logo',
            'description',
            'address',
            'location_map',
            'operation_hours',
            'welcome_note',
            'welcome_note1',
            'slider_details',
            'slider_title',
            'video_slider',
            'image',
            'image2',
            'image3',
            'about_video',

        ];
}
