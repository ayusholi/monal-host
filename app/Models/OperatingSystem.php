<?php

namespace App\Models;

use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperatingSystem extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'version',
        'remarks',
    ];

    /**
     * Get all of the userServices for the OperatingSystem
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userServices(): HasMany
    {
        return $this->hasMany(UserService::class, 'operating_system_id', 'id');
    }
}
