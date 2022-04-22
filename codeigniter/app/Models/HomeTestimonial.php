<?php

namespace App\Models;
use CodeIgniter\Model;


class HomeTestimonial extends Model{
    protected $table = 'Hometestimonial';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'Name','Email','Images','Message','PR_ID'
    ];
    protected $useAutoIncrement = true;

}