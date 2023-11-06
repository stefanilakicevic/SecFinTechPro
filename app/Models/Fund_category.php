<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund_category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name'];

    public function subCategories()
    {
        return $this->hasMany(Fund_sub_category::class, 'category_id'); // koristi se metoda hasMany - veza "jedan prema mnogo" izmedju "Fund_category" i "Fund_sub_category". To znaci da svaka kategorija moze imati vise podkategorija.
    }


    public function funds()
    {
        return $this->hasMany(Fund::class, 'fund_category_id');
    }
}
