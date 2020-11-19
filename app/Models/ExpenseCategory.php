<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    public function expenses()
    {
        return $this->belongsToMany('App\Models\Expense');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
