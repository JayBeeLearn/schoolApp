<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pupil extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'parents_id',
        'school_fee'
    ];

    public function parent(){
        return $this->belongsTo(Parents::class);
    }
}
