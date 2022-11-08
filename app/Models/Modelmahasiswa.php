<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
   
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'mhsnobp';
    protected $allowedFields    = [
        'mhsnobp','mhsnama','mhsalamat','prodinama','mhstgllhr'
    ];

    
}
