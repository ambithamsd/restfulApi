<?php

namespace App\Models;
use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'firstName', 
        'lastName', 
        'email',
        'password'
    ];
}