<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;
    protected $table = 'fund';
    protected $fillable = ['id', 'name', 'fund_category_id', 'fund_sub_category_id', 'isin', 'wkn'];

    public function category()
    {
        return $this->belongsTo(Fund_category::class, 'category_id'); // metoda belongsTo - "mnogo prema jednom" izmedju "Fund_sub_category" i "Fund_category". To znaci da svaka podkategorija pripada samo jednoj nadredjenoj kategoriji.
    }

    public function subCategory()
    {
        return $this->belongsTo(Fund_sub_category::class, 'fund_sub_category_id');
    }

    public function users()
{
    return $this->belongsToMany(User::class, 'user_funds', 'fund_id', 'user_id');
}
}
