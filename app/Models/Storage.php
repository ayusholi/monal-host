<?php

namespace App\Models;

use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Storage extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'total_storage',
        'storage_type',
        'price'
    ];

    /**
     * Get all of the userServices for the Storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userServices(): HasMany
    {
        return $this->hasMany(UserService::class, 'storage_id', 'id');
    }
}
