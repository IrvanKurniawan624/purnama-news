<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory, Blameable;
    protected $table = 'kategori';
    protected $guarded = ['id'];

    public function created_by(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
