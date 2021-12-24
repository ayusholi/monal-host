<?php

namespace App\Models;

use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'price',
    ];

    /**
     * Get all of the userServices for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userServices(): HasMany
    {
        return $this->hasMany(UserService::class, 'region_id', 'id');
    }
}
