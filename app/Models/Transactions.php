<?php

namespace App\Models;

use Illuminate\Contracts\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded=[];


    public function members()
    {
        return $this->belongsTo(Members::class);
    }

    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}
