<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repport extends Model
{
    use HasFactory;
    protected $table = 'repports';
    protected $primaryKey = 'id';
    protected $fillable = ['type_depense','montant_depense','description_depense','date_depense','type_revenu', 'montant_revenu', 'description_revenu','date_revenu','statut','reserve','depense_id','revenu_id','minerval_id'];
    public function deps(){
        return  $this->belongsTo(dep::class);
    }
    public function revenus(){
        return  $this->belongsTo(revenus::class);
    }
}
