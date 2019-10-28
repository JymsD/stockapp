<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = Role::where('name', 'admin')->first();

      $user = new User();
      $user->name = 'Admin';
      $user->email = 'admin@admin.com';
      $user->password = bcrypt('admin123');
      $user->role_id = 1;
      $user->save();
      $user->roles()->attach($admin);
    }
}
