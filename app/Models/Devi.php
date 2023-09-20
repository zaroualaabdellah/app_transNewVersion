<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;

class Devi extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'prix',
        'offre_id', 
        'transporteur_id',
        'status',
        'typeVehicule',
        'dateDebut',
        'dateFin',
        'description',
        'flexibleDate'
    ];
    public function acceptAction()
    {
        return $this->hasOne(AcceptAction::class);
    }
    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
     
}
