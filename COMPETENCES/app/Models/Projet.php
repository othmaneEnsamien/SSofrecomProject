<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'products';


    public function competence()
    {
        return $this->belongsToMany(Competence::class, 'projet_competences', 'project_id', 'competence_id');
    }
}
