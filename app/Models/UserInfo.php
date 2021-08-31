<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperUserInfo
 */
class UserInfo extends Model
{

  /**
   * Get a fullname combination of first_name and last_name
   *
   * @return string
   */
  public function getNameAttribute(): string
  {
    return "{$this->first_name} {$this->last_name}";
  }

  /**
   * Prepare proper error handling for url attribute
   *
   * @return string
   */
//    public function getAvatarUrlAttribute()
//    {
//        // if file avatar exist in storage folder
//        $avatar = public_path(Storage::url($this->avatar));
//        if (is_file($avatar) && file_exists($avatar)) {
//            // get avatar url from storage
//            return Storage::url($this->avatar);
//        }
//
//        // check if the avatar is an external url, eg. image from google
//        if (filter_var($this->avatar, FILTER_VALIDATE_URL)) {
//            return $this->avatar;
//        }
//
//        // no avatar, return blank avatar
//        return asset(theme()->getMediaUrlPath().'avatars/blank.png');
//    }

  /**
   * User info relation to user model
   *
   * @return BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  /**
   * Unserialize values by default
   *
   * @param $value
   *
   * @return mixed|null
   */
  public function getCommunicationAttribute($value)
  {
    // test to un-serialize value and return as array
    $data = @unserialize($value);
    if ($data !== false) {
      return $data;
    } else {
      return null;
    }
  }
}
