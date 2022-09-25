<?php

use Illuminate\Database\Seeder;

class BeginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Nguyễn Dũng',
        //         'email' => 'chidungplus@gmail.com',
        //         'password' => bcrypt('12345678'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //     ],
        // ]);
        
        DB::table('permissions')->insert([
            ['name' => 'admin'],
            # user
            ['name' => 'user_view'],
            ['name' => 'user_create'],
            ['name' => 'user_edit'],
            ['name' => 'user_band'],
            # user role
            ['name' => 'role_user'],
            # role permision
            ['name' => 'role_create'],
            ['name' => 'role_edit'],
            # 
            ['name' => 'acc_ff_view'],
            ['name' => 'acc_ff_create'],
            ['name' => 'acc_ff_edit'],
            ['name' => 'acc_ff_delete'],
            ['name' => 'acc_ff_force_delete'],
            ['name' => 'system_log_view'],
            ['name' => 'card_view'],
        ]);
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'Cộng tác viên'],
        ]);
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
            ['permission_id' => 9, 'role_id' => 1],
            ['permission_id' => 10, 'role_id' => 1],
            ['permission_id' => 11, 'role_id' => 1],
            ['permission_id' => 12, 'role_id' => 1],
            ['permission_id' => 13, 'role_id' => 1],
            ['permission_id' => 14, 'role_id' => 1],
            ['permission_id' => 15, 'role_id' => 1],

            ['permission_id' => 1, 'role_id' => 2],
            ['permission_id' => 9, 'role_id' => 2],
            ['permission_id' => 10, 'role_id' => 2],
            ['permission_id' => 11, 'role_id' => 2],
            ['permission_id' => 12, 'role_id' => 2],
            ['permission_id' => 13, 'role_id' => 2],
        ]);
    }
}
