<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table="usuarios"; 
    protected $primaryKey="id_usuario"; 
}
