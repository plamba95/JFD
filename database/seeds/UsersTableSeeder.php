<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@taskjfd.test',
            'password' => Hash::make('admin')
        ]);

        $adminAuthor = User::create([
            'name' => 'Admin and Author',
            'email' => 'adminAuthor@taskjfd.test',
            'password' => Hash::make('adminAuthor')
        ]);

        $author1 = User::create([
            'name' => 'Author One',
            'email' => 'author1@taskjfd.test',
            'password' => Hash::make('author1')
        ]);


        $author2 = User::create([
            'name' => 'Author Two',
            'email' => 'author2@taskjfd.test',
            'password' => Hash::make('author2')
        ]);


        $admin->roles()->attach($adminRole);
        $adminAuthor->roles()->attach($adminRole);
        $adminAuthor->roles()->attach($authorRole);
        $author1->roles()->attach($authorRole);
        $author2->roles()->attach($authorRole);
    }
}
