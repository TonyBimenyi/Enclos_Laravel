<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revenus extends Model
{
    use HasFactory;
    protected $table = 'revenus';
    protected $primaryKey = 'id';
    protected $fillable = ['type_revenu', 'montant_revenu', 'description_revenu','date_revenu','user','minerval_id','statut','statut_stat'];
    public function repports(){
        return $this->hasMany(repport::class);

    }
    public function minervals(){
        return  $this->belongsTo(minerval::class);
    }
}
