<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistic extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    protected $primaryKey = 'id';
    protected $fillable = ['type_depense','montant_depense','description_depense','date_depense','type_revenu', 'montant_revenu', 'description_revenu','date_revenu','statut','reserve','depense_id','revenu_id'];
    public function statistics(){
        return  $this->belongsTo(statistic::class);
    }
}
