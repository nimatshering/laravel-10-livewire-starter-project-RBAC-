<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
      $user->email = 'admin@gmail.com';
      $user->password = bcrypt('password');
      $user->save();
      $user->roles()->attach($admin);
    }
}
