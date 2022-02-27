<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    static $TRANSACTION_METHOD = [
        'CONNECT_IPS' => 'Connect IPS',
        'IME_PAY' => 'Ime Pay',
    ];

    static $STATUS = [
        'SUCCESSFUL' => 'successful',
        'FAILED' => 'failed',
        'CANCELLED' => 'cancelled',
        'PENDING' => 'pending',
        'PROCESSING' => 'processing',
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'user_service_id',
        'admin_id',
        'transaction_method',
        'payment_amount',
        'tax_percent',
        'tax_amount',
        'total_amount',
        'transaction_id',
        'transaction_currency',
        'transaction_date',
        'remarks',
        'transaction_reference',
        'status'
    ];

    /**
     * Get the user that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the User Service
     */
    public function userService(): HasOne
    {
        return $this->hasOne(UserService::class, 'user_service_id');
    }

    /**
     * Get the admin that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
