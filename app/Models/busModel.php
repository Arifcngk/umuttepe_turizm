<?php

namespace App\Models;

use CodeIgniter\Model;

class BuseModel extends Model
{
    protected $table      = 'buses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['plate_number', 'model', 'seat_capacity', 'seat_layout', 'created_at'];
}
