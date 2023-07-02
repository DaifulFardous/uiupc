<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Problem;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'submissions';
    protected $fillable = [
        'user_id',
        'user_name',
        'prob_id',
    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','id');
    // }
    public function problem(){
        return $this->belongsTo(Problem::class,'prob_id','id');
    }
}