<?php

namespace App\Models;
use CodeIgniter\Model;


class HomeContact extends Model{
    protected $table = 'homecontact';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Name','Email','Message'
    ];
    protected $useAutoIncrement = true;

}