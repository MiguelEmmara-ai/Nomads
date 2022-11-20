<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'users_id',
        'additional_visa',
        'transaction_total',
        'transaction_status',
    ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function travel_package()
    {
        return $this->hasMany(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'users_id', 'id');
    }
}
