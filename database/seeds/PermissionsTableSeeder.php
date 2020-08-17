<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-06-29 09:20:54',
                'updated_at' => '2020-06-29 09:20:54',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_formations',
                'table_name' => 'formations',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-06-29 09:21:56',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_formations',
                'table_name' => 'formations',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-06-29 09:21:56',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_formations',
                'table_name' => 'formations',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-06-29 09:21:56',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_formations',
                'table_name' => 'formations',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-06-29 09:21:56',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_formations',
                'table_name' => 'formations',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-06-29 09:21:56',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-07-08 08:33:24',
                'updated_at' => '2020-07-08 08:33:24',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-07-08 08:33:24',
                'updated_at' => '2020-07-08 08:33:24',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-07-08 08:33:24',
                'updated_at' => '2020-07-08 08:33:24',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-07-08 08:33:24',
                'updated_at' => '2020-07-08 08:33:24',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-07-08 08:33:24',
                'updated_at' => '2020-07-08 08:33:24',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 13:40:31',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 13:40:31',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 13:40:31',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 13:40:31',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 13:40:31',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
        ));
        
        
    }
}