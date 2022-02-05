<?php

namespace App\Models;

use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ram',
        'ram_unit',
        'storage',
        'storage_unit',
        'storage_type',
        'cpu_cores',
        'interval',
        'interval_type',
        'base_price'
    ];
    /**
     * Get all of the userServices for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userServices(): HasMany
    {
        return $this->hasMany(UserService::class, 'service_id', 'id');
    }
}
