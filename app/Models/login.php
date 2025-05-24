<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'login';
    public $timestamps = false;

    protected $fillable = ['user', 'pass', 'id_member'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }
}
