<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserServiceAdminMessage extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_service_id',
        'admin_id',
        'admin_message',
    ];

    /**
     * Get the admin that owns the UserServiceAdminMessage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    /**
     * Get the userService that owns the UserServiceAdminMessage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userService(): BelongsTo
    {
        return $this->belongsTo(UserService::class, 'user_service_id');
    }
}
