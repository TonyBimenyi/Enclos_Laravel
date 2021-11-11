<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minerval extends Model
{
    use HasFactory;
    protected $table = 'minervals';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'section','classe','montant','trimestre','date_paiement','statut','minerval_id'];
    public function revenus(){
        return $this->hasMany(revenus::class);
    }
}
