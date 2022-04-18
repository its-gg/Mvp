<?php

namespace App\Models;
use CodeIgniter\Model;


class Admincategory extends Model{
    protected $table = 'category';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Name'
    ];
    protected $useAutoIncrement = true;

}