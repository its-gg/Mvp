<?php

namespace App\Models;
use CodeIgniter\Model;

class StoreModel extends Model{

    protected $table = 'products';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'ID','Name','PR_ID','Images','Price','Discount_Price','Description','Category','Questions'
    ];
    protected $useAutoIncrement = true;

}