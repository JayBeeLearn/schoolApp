<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'parent_id',
        'pupil_id',
        'amount', 
        'payment_by',
        'date'
    ];

    public function parents(){
        return $this->belongsTo(Parents::class);
    }
    
    public function pupil(){
        return $this->belongsTo(Pupil::class);
    }
}
