<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['nama_tugas', 'deadline', 'status', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}