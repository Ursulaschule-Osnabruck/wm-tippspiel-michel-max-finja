<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function gibHeimTeam()
    {
        return $this->belongsTo(Team::class, 'heim_id');
    }

    public function gibGastTeam()
    {
        return $this->belongsTo(Team::class, 'gast_id');
    }
}
