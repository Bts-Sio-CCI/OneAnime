<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'catégorie';
    protected $primaryKey = 'idCateg';
    protected $allowedFields = ['ageMini', 'ageMaxi'];
}
