<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCProblem extends Model
{
    use HasFactory;
    protected $table = 'p_c_problems';
    protected $fillable = [
        'contest_id',
        'name',
        'description',
        'output'
    ];
    public function contest(){
        return $this->belongsTo(Contest::class,'contest_id','id');
    }
}