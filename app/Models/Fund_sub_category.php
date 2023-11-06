<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_sub_category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'category_id', 'name'];

    public function category()
    {
        return $this->belongsTo(Fund_category::class, 'category_id'); // metoda belongsTo - "mnogo prema jednom" izmedju "Fund_sub_category" i "Fund_category". To znaci da svaka podkategorija pripada samo jednoj nadredjenoj kategoriji.
    }

    public function funds()
    {
        return $this->hasMany(Fund::class, 'fund_sub_category_id');
    }
}
