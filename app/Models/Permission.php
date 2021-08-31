<?php

namespace App\Models;

/**
 * @mixin IdeHelperPermission
 */
class Permission extends \Spatie\Permission\Models\Permission
{
  public static function defaultPermissions(): array
  {
    $data = [];
    // list of model permission
    $model = ['content', 'user', 'role', 'permission'];

    foreach ($model as $value) {
      foreach ((new Permission)->crudActions($value) as $action) {
        $data[] = ['name' => $action];
      }
    }

    return $data;
  }

  public function crudActions($name): array
  {
    $actions = [];
    // list of permission actions
    $crud = ['create', 'read', 'update', 'delete'];

    foreach ($crud as $value) {
      $actions[] = $value.' '.$name;
    }

    return $actions;
  }
}
