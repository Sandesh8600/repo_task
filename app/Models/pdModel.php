<?php

namespace App\Models;

use CodeIgniter\Model;

class pdModel extends Model
{
    protected $table      = 'projects';
    protected $primaryKey = 'id';


    protected $allowedFields = ['project_name', 'status','created_date'];
}