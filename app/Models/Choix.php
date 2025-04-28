<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choix extends Model
{
    protected $fillable = ['passage_id', 'texte', 'suivant_id'];

    public function passage()
    {
        return $this->belongsTo(Passage::class);
    }

    public function suivant()
    {
        return $this->belongsTo(Passage::class, 'suivant_id');
    }
}
