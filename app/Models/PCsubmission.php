<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCsubmission extends Model
{
    use HasFactory;
    protected $table = 'p_csubmissions';
    protected $fillable = [
        'contest',
        'user_id',
        'file',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
