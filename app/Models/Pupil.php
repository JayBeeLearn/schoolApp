<?php

namespace App\Models;

use Faker\Provider\ar_SA\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pupil extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'father_name',
        'gender',
        'date_of_birth',
        'address',
        'parents_id',
        'school_fee',
        'classes_id'
    ];

    public function parents(){
        return $this->belongsTo(Parents::class);
    }

    public function payments(){
        return $this->hasMany(Payments::class, 'pupil_id');
    }

    public function fees(){
        return $this->hasMany(PupilFee::class);
    }

    public function classes(){
        return $this->belongsTo(Classes::class);
    }
}
