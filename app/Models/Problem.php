<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Discussion;
use App\Models\Category;

class Problem extends Model
{
    use HasFactory;
    protected $table = 'problems';
    protected $fillable = [
        'cat_id',
        'name',
        'description',
        'output'
    ];

    public function discussions(){
        return $this->hasMany(Discussion::class,'prob_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }
}