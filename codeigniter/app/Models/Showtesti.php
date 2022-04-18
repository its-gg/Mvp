<?php

namespace App\Models;
use CodeIgniter\Model;


class Showtesti extends Model{
    protected $table = 'showtestimonials';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Name','Images','Message'
    ];
    protected $useAutoIncrement = true;

}