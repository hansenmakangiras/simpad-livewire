<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Generator $faker)
  {
    // \App\Models\User::factory(10)->create();
    // Ask for db migration refresh, default is no
    if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
      // Call the php artisan migrate:refresh
      $this->command->call('migrate:refresh');
      $this->command->warn('Data cleared, starting from blank database.');
    }

    // Seed the default permissions
    $permissions = Permission::defaultPermissions();

    foreach ($permissions as $perms) {
      Permission::firstOrCreate($perms);
    }

    $this->command->info('Default Permissions added.');

    // Confirm roles needed
    if ($this->command->confirm('Create Roles for user, default is superadmin admin and user? [y|N]', true)) {

      // Ask for roles from input
      $input_roles = $this->command->ask('Enter roles in comma separate format.', 'superadmin,admin,user');

      // Explode roles
      $roles_array = explode(',', $input_roles);

      // add roles
      foreach ($roles_array as $role) {
        $role = Role::firstOrCreate(['name' => trim($role)]);

        if ($role->name == 'superadmin') {
          // assign all permissions
          $role->syncPermissions(Permission::all());
          $this->command->info('Super Admin granted all the permissions');
        } elseif ($role->name == 'admin') {
          // assign all permissions
          $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->where('name', 'LIKE', 'add_%')->where('name', 'LIKE', 'edit_%'));
          $this->command->info('Admin granted some of the permissions');
        } else {
          // for others by default only read access
          $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
        }

        // create one user for each role
        $this->createUser($role, $faker);
      }

      $this->command->info('Roles '.$input_roles.' added successfully');
    } else {
      Role::firstOrCreate(['name' => 'user']);
      $this->command->info('Added only default user role.');
    }

    // now lets seed some posts for demo
//        factory(\App\Post::class, 30)->create();
//        $this->command->info('Some Posts data seeded.');
//        $this->command->warn('All done :)');
  }

  /**
   * Create a user with given role.
   *
   * @param $role
   */
  private function createUser($role, Generator $faker)
  {
    $user = User::factory()->create();
    $user->assignRole($role->name);

    $dummyInfo = [
      'nop_pbb' => $faker->numberBetween(10000000000, 100000000000),
      'nik' => $faker->numberBetween(1000000000000, 100000000000),
      'avatar' => $faker->imageUrl,
      'tahun_sppt' => now()->year,
      'no_telepon' => $faker->phoneNumber,
      'status_hubungan' => $faker->boolean,
      'domisili' => $faker->numberBetween(1, 5),
    ];

    $info = new UserInfo();
    foreach ($dummyInfo as $key => $value) {
      $info->$key = $value;
    }
    $info->user()->associate($user);
    $info->save();

    if ($role->name == 'superadmin') {
      $this->command->info('Here is your admin details to login:');
      $this->command->warn($user->email);
      $this->command->warn('Password is "password"');
    }
  }
}
