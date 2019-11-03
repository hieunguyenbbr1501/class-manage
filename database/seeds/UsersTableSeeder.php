<?php
use Illuminate\Database\Seeder;
use App\Models\BackpackUser as User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'email'    => 'admin@example.com',
        ],
            [
                'name'     => 'Demo Admin',
                'password' => bcrypt('admin'),

            ]);
        User::firstOrCreate([
            'email'    => 'backend@example.com',
        ],
            [
                'name'     => 'Demo Backend',
                'password' => bcrypt('backend'),

            ]);
        User::firstOrCreate([
            'email'    => 'user@example.com',
        ],
            [
                'name'     => 'Demo User',
                'password' => bcrypt('user'),

            ]);


    }
}
