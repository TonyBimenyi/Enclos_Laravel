<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dep extends Model
{
    use HasFactory;
    protected $table = 'deps';
    protected $primaryKey = 'id';
    protected $fillable = ['type_depense', 'montant_depense', 'description_depense','date_depense','user','statut','statut_stat'];
    public function repports(){
        return $this->hasMany(repport::class);

    }
}
