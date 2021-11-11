<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_depense extends Model
{
    use HasFactory;
    protected $table = 'type_depenses';
    protected $primaryKey = 'id';
    protected $fillable = ['type_depense'];
}
