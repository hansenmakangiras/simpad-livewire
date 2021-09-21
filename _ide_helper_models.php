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

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\JenisObjekPajak.
     *
     * @mixin IdeHelperJenisObjekPajak
     *
     * @method static Builder|JenisObjekPajak newModelQuery()
     * @method static Builder|JenisObjekPajak newQuery()
     * @method static Builder|JenisObjekPajak query()
     */
    class IdeHelperJenisObjekPajak extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\JenisOpReklame.
     *
     * @mixin IdeHelperJenisOpReklame
     *
     * @method static Builder|JenisOpReklame newModelQuery()
     * @method static Builder|JenisOpReklame newQuery()
     * @method static Builder|JenisOpReklame query()
     */
    class IdeHelperJenisOpReklame extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\JenisUsahaOpReklame.
     *
     * @mixin IdeHelperJenisUsahaOpReklame
     *
     * @method static Builder|JenisUsahaOpReklame newModelQuery()
     * @method static Builder|JenisUsahaOpReklame newQuery()
     * @method static Builder|JenisUsahaOpReklame query()
     */
    class IdeHelperJenisUsahaOpReklame extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\JenisWajibPajak.
     *
     * @mixin IdeHelperJenisWajibPajak
     *
     * @property int    $id
     * @property string $nama_jenis_wp
     *
     * @method static Builder|JenisWajibPajak newModelQuery()
     * @method static Builder|JenisWajibPajak newQuery()
     * @method static Builder|JenisWajibPajak query()
     * @method static Builder|JenisWajibPajak search($term)
     * @method static Builder|JenisWajibPajak whereId($value)
     * @method static Builder|JenisWajibPajak whereNamaJenisWp($value)
     */
    class IdeHelperJenisWajibPajak extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\KategoriOpReklame.
     *
     * @mixin IdeHelperKategoriOpReklame
     *
     * @method static Builder|KategoriOpReklame newModelQuery()
     * @method static Builder|KategoriOpReklame newQuery()
     * @method static Builder|KategoriOpReklame query()
     */
    class IdeHelperKategoriOpReklame extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\ObjekPajak.
     *
     * @mixin IdeHelperObjekPajak
     *
     * @method static Builder|ObjekPajak newModelQuery()
     * @method static Builder|ObjekPajak newQuery()
     * @method static Builder|ObjekPajak query()
     */
    class IdeHelperObjekPajak extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

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
     * @method static Builder|Permission newModelQuery()
     * @method static Builder|Permission newQuery()
     * @method static Builder|Permission permission($permissions)
     * @method static Builder|Permission query()
     * @method static Builder|Permission role($roles, $guard = null)
     * @method static Builder|Permission whereCreatedAt($value)
     * @method static Builder|Permission whereGuardName($value)
     * @method static Builder|Permission whereId($value)
     * @method static Builder|Permission whereName($value)
     * @method static Builder|Permission whereUpdatedAt($value)
     */
    class IdeHelperPermission extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\RefDomisili.
     *
     * @mixin IdeHelperRefDomisili
     *
     * @method static Builder|RefDomisili newModelQuery()
     * @method static Builder|RefDomisili newQuery()
     * @method static Builder|RefDomisili query()
     */
    class IdeHelperRefDomisili extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\RefJenisPajak.
     *
     * @mixin IdeHelperRefJenisPajak
     *
     * @method static Builder|RefJenisPajak newModelQuery()
     * @method static Builder|RefJenisPajak newQuery()
     * @method static Builder|RefJenisPajak query()
     */
    class IdeHelperRefJenisPajak extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\RefStatusHubungan.
     *
     * @mixin IdeHelperRefStatusHubungan
     *
     * @method static Builder|RefStatusHubungan newModelQuery()
     * @method static Builder|RefStatusHubungan newQuery()
     * @method static Builder|RefStatusHubungan query()
     */
    class IdeHelperRefStatusHubungan extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

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
     * @method static Builder|Role newModelQuery()
     * @method static Builder|Role newQuery()
     * @method static Builder|Role permission($permissions)
     * @method static Builder|Role query()
     * @method static Builder|Role search($term)
     * @method static Builder|Role whereCreatedAt($value)
     * @method static Builder|Role whereGuardName($value)
     * @method static Builder|Role whereId($value)
     * @method static Builder|Role whereName($value)
     * @method static Builder|Role whereUpdatedAt($value)
     */
    class IdeHelperRole extends Eloquent
    {
    }
}

namespace App\Models{

  use Database\Factories\UserFactory;
  use Eloquent;

    /**
     * App\Models\User.
     *
     * @mixin IdeHelperUser
     *
     * @property int                             $id
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
     * @property string|null                     $nik
     * @property mixed|null                      $avatar
     * @property-read \App\Models\UserInfo|null $info
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
     * @property-read int|null $roles_count
     *
     * @method static UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User notSuperadmin()
     * @method static Builder|User onlyTrashed()
     * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|User search($term)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereNik($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
     * @method static Builder|User withTrashed()
     * @method static Builder|User withoutTrashed()
     */
    class IdeHelperUser extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

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
     * @property string|null                     $gelar
     * @property string|null                     $first_name
     * @property string|null                     $last_name
     * @property-read mixed|null $communication
     * @property-read string $name
     * @property-read \App\Models\User $user
     *
     * @method static Builder|UserInfo newModelQuery()
     * @method static Builder|UserInfo newQuery()
     * @method static Builder|UserInfo query()
     * @method static Builder|UserInfo whereAvatar($value)
     * @method static Builder|UserInfo whereCreatedAt($value)
     * @method static Builder|UserInfo whereDeletedAt($value)
     * @method static Builder|UserInfo whereDomisili($value)
     * @method static Builder|UserInfo whereFirstName($value)
     * @method static Builder|UserInfo whereGelar($value)
     * @method static Builder|UserInfo whereId($value)
     * @method static Builder|UserInfo whereLastName($value)
     * @method static Builder|UserInfo whereNik($value)
     * @method static Builder|UserInfo whereNoTelepon($value)
     * @method static Builder|UserInfo whereNopPbb($value)
     * @method static Builder|UserInfo whereStatusHubungan($value)
     * @method static Builder|UserInfo whereTahunSppt($value)
     * @method static Builder|UserInfo whereUpdatedAt($value)
     * @method static Builder|UserInfo whereUserId($value)
     */
    class IdeHelperUserInfo extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\UserInfoPajak.
     *
     * @mixin IdeHelperUserInfoPajak
     *
     * @method static Builder|UserInfoPajak newModelQuery()
     * @method static Builder|UserInfoPajak newQuery()
     * @method static Builder|UserInfoPajak query()
     */
    class IdeHelperUserInfoPajak extends Eloquent
    {
    }
}

namespace App\Models{

  use Eloquent;
  use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\WajibPajak.
     *
     * @mixin IdeHelperWajibPajak
     *
     * @method static Builder|WajibPajak newModelQuery()
     * @method static Builder|WajibPajak newQuery()
     * @method static Builder|WajibPajak query()
     */
    class IdeHelperWajibPajak extends Eloquent
    {
    }
}
