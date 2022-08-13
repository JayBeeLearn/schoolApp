<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parents extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $primarykey ='id';

    protected $fillable = [
        'father_name',
        'father_phone',
        'father_occupation',
        'mother_name',
        'mother_phone',
        'mother_occupation'
        ];

        public function pupil(){
            return $this->hasMany(Pupil::class);
        }
}
        