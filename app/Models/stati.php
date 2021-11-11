<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stati extends Model
{
    use HasFactory;
    protected $table = 'stats';
    protected $primaryKey = 'id';
    public function deps(){
        return  $this->belongsTo(dep::class);
    }
    public function revenuses(){
        return  $this->belongsTo(revenus::class);
    }
}
