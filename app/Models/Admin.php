<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\UserServiceAdminMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

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
