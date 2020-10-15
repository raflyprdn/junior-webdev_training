<?php

namespace App\Models;

use CodeIgniter\Model;

class JamurModel extends Model
{
    protected $table      = 'jamur';
    protected $primaryKey = 'jamur_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['date', 'variance', 'weight', 'location'];
}
