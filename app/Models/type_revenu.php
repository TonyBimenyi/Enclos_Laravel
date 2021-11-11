<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_revenu extends Model
{
    use HasFactory;
    protected $table = 'type_revenus';
    protected $primaryKey = 'id';
    protected $fillable = ['type_revenu'];
}
