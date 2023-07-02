<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Problem;
use App\Models\User;

class Discussion extends Model
{
    use HasFactory;

    protected $table = 'discussions';
    protected $fillable = [
        'prob_id',
        'user_id',
        'body'
    ];

    public function problem(){
        return $this->belongsTo(Problem::class, 'prob_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}