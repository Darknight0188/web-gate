<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();

        User::create([
            'id' => 1,
            'name' => 'Root',
            'email' => 'admin@mlh-gate.jp',
            'email_verified_at' => '2020-09-01',
            'password' => bcrypt('123qweA@'),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
