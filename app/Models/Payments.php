<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'parents_id',
        'amount', 
        
    ];

    public function parents(){
        return $this->belongsTo(Parents::class);
    }
    
   
}
