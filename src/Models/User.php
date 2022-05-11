<?php

namespace MoWebSo\Users\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use MoWebSo\Tenants\Models\Tenant;
use MoWebSo\Users\Data\UserData;
use Spatie\LaravelData\WithData;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasFactory;
    use WithData;
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected string $dataClass = UserData::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if (config('users.enable_tenants', true)) {
            $this->mergeFillable(['current_tenant_id']);
        }
    }

    public function tenants()
    {
        return $this->belongsToMany(Tenant::class)
                    ->withPivot('is_owner');
    }
}
