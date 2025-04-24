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

    /**
     * Relation avec le passage parent.
     */
    public function parent()
    {
        return $this->belongsTo(Passage::class, 'parent_id');
    }

    /**
     * Relation avec les passages enfants.
     */
    public function children()
    {
        return $this->hasMany(Passage::class, 'parent_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_passage')->withPivot('is_completed')->withTimestamps();
    }
}
