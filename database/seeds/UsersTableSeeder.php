<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Store;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,40 )->create()->each(function ($user){
            $user->store()->save(factory(Store::class)->make());
        });

    #   \DB::table('users')->insert(
    #       [
    #           'name' => 'administrator',
    #           'email' => "admin@admin",
    #           'email_verified_at' => now(),
    #           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    #           'remember_token' => 'okokokok',
        #]

#        );
   }
}
