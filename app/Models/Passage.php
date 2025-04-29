<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'parent_id'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_passage')->withPivot('is_completed')->withTimestamps();
    }

    public function choix(){
        return $this->hasMany(Choix::class);
    }
}
