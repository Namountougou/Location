<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarification extends Model
{
    use HasFactory;

    protected $table= 'tarifications';

    public function dureeLocation(){
        return $this->belongsTo(DureeLocation::class, 'duree_location_id', 'id');

    }

    public function location(){
        return $this->belongsTo(Location::class, 'article_id', 'id');
    }
}
