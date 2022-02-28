<?php

namespace App\Models;

use App\Models\User;
use App\Models\Region;
use App\Models\Service;
use App\Models\Storage;
use App\Models\OperatingSystem;
use App\Models\UserServiceAdminMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserService extends Model
{
    use HasFactory;


    static $STATUS = [
        'SUCCESSFUL' => 'successful',
        'PROCESSING' => 'on_process',
        'CANCELLED' => 'cancelled',
    ];
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'service_id',
        'region_id',
        'storage_id',
        'operating_system_id',
        'start_from',
        'expires_at',
        'credentials',
        'status'
    ];

    /**
     * Get the user that owns the service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the service that owns the UserService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    /**
     * Get all of the adminMessages for the UserService
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adminMessages(): HasMany
    {
        return $this->hasMany(UserServiceAdminMessage::class, 'user_service_id', 'id');
    }

    /**
     * Get Relation with UserService and Payment
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class, 'id', 'user_service_id');
    }

    /**
     * Get the storage that owns the UserService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function storage(): BelongsTo
    {
        return $this->belongsTo(Storage::class, 'storage_id');
    }

    /**
     * Get the region that owns the UserService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    /**
     * Get the operatingSytem that owns the UserService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operatingSytem(): BelongsTo
    {
        return $this->belongsTo(OperatingSystem::class, 'operating_system_id');
    }
}
