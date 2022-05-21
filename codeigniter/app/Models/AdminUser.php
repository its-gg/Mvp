<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminUser extends Model
{
    protected $table = 'adminUsers';

    protected $allowedFields = [
        'name',
        'email',
        'password'
    ];
}
