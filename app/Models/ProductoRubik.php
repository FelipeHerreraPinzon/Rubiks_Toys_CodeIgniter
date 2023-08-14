<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductoRubik extends Model{
    protected $table      = 'productos_rubik';
     protected $primaryKey = 'id';
     protected $allowedFields = ['nombre', 'descripcion', 'imagen'];
}