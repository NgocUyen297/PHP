<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'h:m:s';

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
