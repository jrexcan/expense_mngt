<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'amount',
        'entry_date',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\ExpenseCategory','category', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
