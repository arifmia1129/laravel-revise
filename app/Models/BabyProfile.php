<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabyProfile extends Model
{
    use HasFactory;

    protected $table = 'babies_profile';

    public function baby()
    {
        return $this->belongsTo(Baby::class);
    }
}
