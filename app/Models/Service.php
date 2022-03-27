<?php

namespace App\Models;

use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'slug',
        'interval',
        'interval_type',
        'base_price',
        'service_type'
    ];

    /**
     * Get the VPS Service
     */
    public function vpsService(): HasOne
    {
        return $this->hasOne(VpsService::class, 'service_id', 'id');
    }

    /**
     * Get the EmailService
     */
    public function emailService(): HasOne
    {
        return $this->hasOne(EmailService::class, 'service_id', 'id');
    }

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
