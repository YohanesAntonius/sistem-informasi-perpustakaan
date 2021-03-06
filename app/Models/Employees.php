<?php

namespace App\Models;

use Illuminate\Contracts\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $guarded=[];


    public function members()
    {
        return $this->hasOne(Members::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
