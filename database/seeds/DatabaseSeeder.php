<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // disable fk constrain check
            // \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");

            $this->call(AdminsTableSeeder::class);
            $this->call(RolesTableSeeder::class);

            // enable back fk constrain check
            // \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            $this->call(CountriesTableSeeder::class);
            $this->call(StatesTableSeeder::class);
            $this->call(CitiesTableSeeder::class);
            $this->call(CompaniesTableSeeder::class);
            $this->call(DepartmentsTableSeeder::class);
            $this->call(JobTitlesTableSeeder::class);
            $this->call(LeaveGroupsTableSeeder::class);
            $this->call(LeaveTypesTableSeeder::class);
            $this->call(LeavegroupHasLeavetypesTableSeeder::class);
    }

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();
        foreach ($permissions['admin'] as $perms) {
            Permission::firstOrCreate(['name' => trim($perms), 'guard_name' => 'admin']);
        }
        foreach ($permissions['web'] as $perms) {
            Permission::firstOrCreate(['name' => trim($perms), 'guard_name' => 'web']);
        }
        $this->command->info('Default Permissions added.');

        // add (Backend)roles
        // $roles_array = Role::defaultRoles();
        $roles_array = Role::where('guard_name', 'admin')->get();
        foreach($roles_array as $role) {
            // $role = Role::firstOrCreate(['name' => trim($role), 'guard_name' => 'admin']);
            $this->command->info($role->name);
            $backend_permission = Permission::where('guard_name', 'admin');

            if( $role->name == 'admin' ) {
                // assign all permissions
                $backend_permission = $backend_permission->get();
                $role->syncPermissions($backend_permission);
                $this->command->info('Admin granted all the permissions');

            }elseif ($role->name == 'sub_admin') {
                $backend_permission = $backend_permission->where(function($q) {
                    $q->where('name', 'view_users')
                      ->orWhere('name', 'add_users');
                })->get();
                $role->syncPermissions($backend_permission);

            } elseif ($role->name == 'seo') {
                // for others by default only read access
                //$role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
            }

            // // create one user for each role
            $this->createUser($role);
        }

        // add (Fontend)roles
        $roles_array = Role::where('guard_name', 'web')->get();
        foreach($roles_array as $role) {
            $this->command->info($role->name);
            $frontend_permission = Permission::where('guard_name', 'web');

            if( $role->name == 'manager' ) {
                // assign all permissions
                $frontend_permission = $frontend_permission->get();
                $role->syncPermissions($frontend_permission);
                $this->command->info('Admin granted all the permissions');

            }elseif ($role->name == 'employee') {
                $frontend_permission = $frontend_permission->where(function($q) {
                    $q->where('name', 'view_attendances')
                      ->orWhere('name', 'add_attendances')
                      ->orWhere('name', 'view_tasks');
                })->get();
                $role->syncPermissions($frontend_permission);
            }
        }



    }

    private function createUser($role)
    {
        
        if( $role->name == 'admin' ) {
            $admin = Admin::find(1);
           // $this->command->warn($admin->name);
            $admin->assignRole($role->name);
            $this->command->info('Here is your admin details to login:');
            $this->command->warn($admin->email);
            $this->command->warn('Password is "admin"');

        }else if ($role->name == 'sub_admin') {
            $admin = Admin::find(2);
            $admin->assignRole($role->name);
            $this->command->info('Here is your sub admin details to login:');
            $this->command->warn($admin->email);
            $this->command->warn('Password is "sub admin"');

        }else if ($role->name == 'seo') {
            $admin = Admin::find(3);
            $admin->assignRole($role->name);
            $this->command->info('Here is your seo details to login:');
            $this->command->warn($admin->email);
            $this->command->warn('Password is "seo"');
        }

    }

}
