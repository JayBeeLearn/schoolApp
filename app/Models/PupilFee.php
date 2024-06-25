<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PupilFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'parents_id',
        'pupil_id',
        'fees'
    ];

    public function pupil(){
        return $this->belongsTo(Pupil::class);
    }
}
