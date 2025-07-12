<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai', 'ruangan', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}