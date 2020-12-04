<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class,1)->create();



        // Permission Seedr
        $permissionsByRole = [
            'admin'     => 'admin.permission',
            'teacher'   => 'teacher.permission',
            'parent'    => 'parent.permission',
            'account'   => 'account.permission',
            'student'   => 'student.permission',
            'librarian' => 'librarian.permission'
        ];
        foreach ($permissionsByRole as $role => $permission) {
            Role::create(['name'=>$role]);
            Permission::create(['name'=>$permission]);
        }
        $role1 = Role::find(1);
        $role1->givePermissionTo(Permission::all());
        // $role2 = Role::find(2);
        // $role2->givePermissionTo(Permission::find(2));

        DB::table('model_has_roles')->insert(['role_id'=>1, 'model_type'=>'App\User', 'model_id'=>'1']);
        // DB::table('model_has_roles')->insert(['role_id'=>2, 'model_type'=>'App\User', 'model_id'=>'2']);

    }
}
