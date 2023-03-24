<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Support extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'admin_id',
        'primary_support_id',
        'title',
        'body',
        'type'
    ];

    /**
     * Get all of the userServices for the Storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the userServices for the Storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    /**
     * Get all of the userServices for the Storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function primarySupport(): BelongsTo
    {
        return $this->belongsTo(User::class, 'primary_support_id', 'id');
    }

    /**
     * Get all of the userServices for the Storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supports(): HasMany
    {
        return $this->hasMany(Support::class, 'id', 'primary_support_id');
    }
}
