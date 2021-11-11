<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depenses extends Model
{
    use HasFactory;
    protected $table = 'depenses';
    protected $primaryKey = 'id';
    protected $fillable = ['type_depense', 'montant_depense', 'description_depense','date_depense','user','statut','statut_stat'];
    public function rapports(){
        return $this->hasMany(rapport::class);

    }
}
