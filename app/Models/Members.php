<?php

namespace App\Models;

use Illuminate\Contracts\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $guarded=[];

    public function employees()
    {
        return $this->belongsTo(Employees::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
