<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'katalog';
    protected $fillable = ['procut_name', 'weight', 'price', 'remark'];
    
}
