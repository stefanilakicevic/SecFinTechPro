<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_fund extends Model 
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'fund_id'];
}
