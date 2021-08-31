<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasRoles;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik',
        'username',
        'email',
        'password',
        'status',
        'is_sadmin',
        'last_login',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login'        => 'datetime',
        'status'            => 'boolean',
        'is_sadmin'         => 'boolean',
    ];

    /**
     * Prepare proper error handling for url attribute.
     *
     * @return string
     */
    //  public function getAvatarUrlAttribute()
    //  {
//    if ($this->info) {
//      return config('global.general.product.subdir').$this->info->avatar_url;
//    }
//
//    return asset(theme()->getMediaUrlPath().'avatars/blank.png');
    //  }

    /**
     * User relation to info model.
     *
     * @return HasOne
     */
    public function info(): HasOne
    {
        return $this->hasOne(UserInfo::class);
    }

    public function isSuperadmin(): bool
    {
        return auth()->user()->id === 1;
    }

    public function scopeNotSuperadmin($query)
    {
        return $query->where('id', '!=', 1)->where('is_admin', '!=', 1);
    }

    public function scopeSearch($query, $term)
    {
        $term = "%{$term}%";
        $query->where(function ($q) use ($term) {
            $q->where('nik', 'like', $term)
        ->orWhere('username', 'like', $term)
        ->orWhere('email', 'like', $term);
        });
    }
}
