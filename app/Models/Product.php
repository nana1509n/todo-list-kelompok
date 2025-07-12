<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['kode_mk', 'nama_mk', 'dosen'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}