<?php

use Illuminate\Database\Seeder;

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
        $this->call(FormationsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
    }
}
