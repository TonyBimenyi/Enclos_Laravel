<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $table='teachers';
    protected $primaryKey = 'id';
    protected $fillable = ['nom','prenom','classe','cours','phone','adresse','statut','reserve'];
}
