<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permission_role')->truncate();
        DB::table('role_user')->truncate();

        DB::table('permissions')->insert([
            [
                'name' => 'admin',
                'description' => 'Midware admin'
            ],
            [
                'name' => 'system_log_view',
                'description' => 'Xem log hệ thống'
            ],
            [
                'name' => 'admin_log_view',
                'description' => 'Xem log admin'
            ],
            [
                'name' => 'user_log_view',
                'description' => 'Xem log user'
            ],
            [
                'name' => 'role_view',
                'description' => 'Xem danh sách vai trò'
            ],
            [
                'name' => 'role_create',
                'description' => 'Tạo mới một vai trò'
            ],
            [
                'name' => 'role_edit',
                'description' => 'Sửa display name vai trò'
            ],
            [
                'name' => 'role_delete',
                'description' => 'Xóa một vai trò'
            ],
            [
                'name' => 'permission_view',
                'description' => 'Xem danh sách quyền hạn'
            ],
            [
                'name' => 'permission_edit',
                'description' => 'Sửa display name quyền hạn'
            ],
            [
                'name' => 'role_permission_view',
                'description' => 'Xem danh sách quyền hạn trong một vai trò'
            ],
            [
                'name' => 'role_permission_edit',
                'description' => 'Cập nhật quyền hạn cho một vai trò'
            ],
            [
                'name' => 'user_role_view',
                'description' => 'Xem danh sách vai trò của một user'
            ],
            [
                'name' => 'user_role_edit',
                'description' => 'Sửa vai trò của một user'
            ],
            [
                'name' => 'setting_view',
                'description' => 'Xem danh sách setting'
            ],
            [
                'name' => 'setting_edit',
                'description' => 'Sửa các cài đặt'
            ],
            [
                'name' => 'setting_view',
                'description' => 'Xem danh sách setting'
            ],
            [
                'name' => 'user_view',
                'description' => 'Xem danh sách user'
            ],
            [
                'name' => 'user_create',
                'description' => 'Thêm mới user'
            ],
            [
                'name' => 'user_edit',
                'description' => 'Sửa user'
            ],
            [
                'name' => 'user_delete',
                'description' => 'Xóa user'
            ],
            [
                'name' => 'user_band',
                'description' => 'Band user'
            ],
            [
                'name' => 'product_view',
                'description' => 'Xem danh sách sản phẩm'
            ],
            [
                'name' => 'product_create',
                'description' => 'Thêm sản phẩm mới'
            ],
            [
                'name' => 'product_edit',
                'description' => 'Sửa sản phẩm'
            ],
            [
                'name' => 'product_delete',
                'description' => 'Xóa sản phẩm'
            ],
            [
                'name' => 'model_view',
                'description' => 'Xem danh sách mẫu sản phẩm'
            ],
            [
                'name' => 'model_create',
                'description' => 'Thêm mẫu sản phẩm mới'
            ],
            [
                'name' => 'model_edit',
                'description' => 'Sửa mẫu sản phẩm'
            ],
            [
                'name' => 'model_delete',
                'description' => 'Xóa mẫu sản phẩm'
            ],
            [
                'name' => 'label_view',
                'description' => 'Xem danh sách labbel'
            ],
            [
                'name' => 'label_create',
                'description' => 'Tạo mới labbel'
            ],
            [
                'name' => 'label_edit',
                'description' => 'Sửa labbel'
            ],
            [
                'name' => 'label_delete',
                'description' => 'Xóa labbel'
            ],
            [
                'name' => 'wheel_view',
                'description' => 'Xem danh lượt quay'
            ],
            [
                'name' => 'wheel_create',
                'description' => 'Tạo mới một lượt quay'
            ],
            [
                'name' => 'wheel_edit',
                'description' => 'Sửa một lượt quay'
            ],
            [
                'name' => 'wheel_delete',
                'description' => 'Xóa một lượt quay'
            ],
            [
                'name' => 'withdraw_view',
                'description' => 'Xem danh rút kim cương'
            ],
            [
                'name' => 'withdraw_create',
                'description' => 'Tạo một lượt rút kim cương mới'
            ],
            [
                'name' => 'withdraw_edit',
                'description' => 'Chỉnh sửa một lượt rút kim cương'
            ],
            [
                'name' => 'withdraw_delete',
                'description' => 'Xóa một lượt rút'
            ],
            [
                'name' => 'user_acc_view',
                'description' => 'Xem lịch sử mua acc'
            ],
            [
                'name' => 'user_acc_create',
                'description' => 'Thêm lịch sử mua acc'
            ],
            [
                'name' => 'user_acc_c_edit',
                'description' => 'Sửa lịch sử mua acc'
            ],
            [
                'name' => 'user_acc_c_delete',
                'description' => 'Xóa lịch sử mua acc'
            ],
            [
                'name' => 'user_random_view',
                'description' => 'Xem lịch sử mua random'
            ],
            [
                'name' => 'user_random_create',
                'description' => 'Tạo lịch sử mua random'
            ],
            [
                'name' => 'user_random_edit',
                'description' => 'Chỉnh sửa lịch sử mua random'
            ],
            [
                'name' => 'user_random_delete',
                'description' => 'Xóa lịch sử mua random'
            ],
        ]);

        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'Cộng tác viên'],
        ]);
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        $permissons = DB::table('permissions')->get();

        foreach ($permissons as $key => $row) {
            DB::table('permission_role')->insert([
                'role_id'       => 1,
                'permission_id' => $row->id
            ]);
            
        }
    }
}
