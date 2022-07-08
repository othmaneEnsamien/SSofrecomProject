<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $table = 'competences';


    public function project()
    {
        return $this->belongsToMany(Projet::class, 'projet_competences', 'competence_id', 'project_id');
    }
}
