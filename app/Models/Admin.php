<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\UserServiceAdminMessage;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'admin_type',
        'remember_token',
    ];

     /**
     * Specify guard for model
     *
     * @var <string>
     */

    protected $guard = 'admin';

    /**
     * Get all of the payments for the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'admin_id', 'id');
    }

    /**
     * Get all of the userServiceMessages for the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userServiceMessages(): HasMany
    {
        return $this->hasMany(UserServiceAdminMessage::class, 'admin_id', 'id');
    }
}
