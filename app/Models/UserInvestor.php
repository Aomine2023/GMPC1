<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UuidTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserInvestor extends Authenticatable
{
    use HasFactory;
    use UuidTrait;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'investor';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'phone',
        'password_change_at',
        'password_expiry',
        'otp_code',
        'image',
        'gender',
        'dob',
        'city',
        'country',
        'zipcode',
        'address'
    ];

    protected $hidden = [
        'password',
    ];

    public function cards()
    {
        return $this->hasMany(InvestorCard::class, 'investor_id');
    }
    
}