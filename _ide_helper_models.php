<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace App\Models{
    /**
     * App\Models\Permission.
     *
     * @mixin IdeHelperPermission
     *
     * @property int                             $id
     * @property string                          $name
     * @property string                          $guard_name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
     * @property-read int|null $roles_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
     * @property-read int|null $users_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
     */
    class IdeHelperPermission extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\RefDomisili.
     *
     * @mixin IdeHelperRefDomisili
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RefDomisili newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefDomisili newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefDomisili query()
     */
    class IdeHelperRefDomisili extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\RefJenisPajak.
     *
     * @mixin IdeHelperRefJenisPajak
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RefJenisPajak newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefJenisPajak newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefJenisPajak query()
     */
    class IdeHelperRefJenisPajak extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\RefStatusHubungan.
     *
     * @mixin IdeHelperRefStatusHubungan
     *
     * @method static \Illuminate\Database\Eloquent\Builder|RefStatusHubungan newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefStatusHubungan newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|RefStatusHubungan query()
     */
    class IdeHelperRefStatusHubungan extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Role.
     *
     * @mixin IdeHelperRole
     *
     * @property int                             $id
     * @property string                          $name
     * @property string                          $guard_name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
     * @property-read int|null $users_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|Role query()
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
     */
    class IdeHelperRole extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\User.
     *
     * @mixin IdeHelperUser
     *
     * @property int                             $id
     * @property string                          $gelar
     * @property string                          $first_name
     * @property string                          $last_name
     * @property string                          $username
     * @property string                          $email
     * @property bool                            $status
     * @property bool                            $is_admin
     * @property \Illuminate\Support\Carbon|null $last_login
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string                          $password
     * @property string|null                     $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $deleted_at
     * @property-read string $name
     * @property-read \App\Models\UserInfo|null $info
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
     * @property-read int|null $roles_count
     *
     * @method static \Database\Factories\UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|User search($term)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereGelar($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
     * @method static \Illuminate\Database\Query\Builder|User withTrashed()
     * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
     */
    class IdeHelperUser extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\UserInfo.
     *
     * @mixin IdeHelperUserInfo
     *
     * @property int                             $id
     * @property int                             $user_id
     * @property mixed                           $avatar
     * @property string                          $nop_pbb
     * @property string                          $nik
     * @property string                          $no_telepon
     * @property int                             $tahun_sppt
     * @property int                             $status_hubungan
     * @property int                             $domisili
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string|null                     $deleted_at
     * @property-read mixed|null $communication
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo query()
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereAvatar($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereDomisili($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereNik($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereNoTelepon($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereNopPbb($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereStatusHubungan($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereTahunSppt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUserId($value)
     */
    class IdeHelperUserInfo extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\UserInfoPajak.
     *
     * @mixin IdeHelperUserInfoPajak
     *
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfoPajak newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfoPajak newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserInfoPajak query()
     */
    class IdeHelperUserInfoPajak extends \Eloquent
    {
    }
}
