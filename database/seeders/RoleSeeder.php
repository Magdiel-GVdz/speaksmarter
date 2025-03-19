<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::firstOrCreate(["name" => "admin"]);
        $role_editor = Role::firstOrCreate(["name" => "editor"]);

        $permission_create_role = Permission::firstOrCreate(["name" => "create role"]);
        $permission_read_role = Permission::firstOrCreate(["name" => "read role"]);
        $permission_update_role = Permission::firstOrCreate(["name" => "update role"]);
        $permission_delete_role = Permission::firstOrCreate(["name" => "delete role"]);

        $permission_create_lesson = Permission::firstOrCreate(["name" => "create lesson"]);
        $permission_read_lesson = Permission::firstOrCreate(["name" => "read lesson"]);
        $permission_update_lesson = Permission::firstOrCreate(["name" => "update lesson"]);
        $permission_delete_lesson = Permission::firstOrCreate(["name" => "delete lesson"]);

        $permission_create_category = Permission::firstOrCreate(["name" => "create category"]);
        $permission_read_category = Permission::firstOrCreate(["name" => "read category"]);
        $permission_update_category = Permission::firstOrCreate(["name" => "update category"]);
        $permission_delete_category = Permission::firstOrCreate(["name" => "delete category"]);

        $permission_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category
        ];

        $permission_editor = [
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category
        ];

        $role_admin->syncPermissions($permission_admin);
        $role_editor->syncPermissions($permission_editor);
    }
}
