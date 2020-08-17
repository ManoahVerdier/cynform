<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'formations',
                'slug' => 'formations',
                'display_name_singular' => 'Formation',
                'display_name_plural' => 'Formations',
                'icon' => NULL,
                'model_name' => 'App\\Formation',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-07-17 08:15:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Catégorie',
                'display_name_plural' => 'Catégories',
                'icon' => 'voyager-archive',
                'model_name' => 'App\\Categorie',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-07-08 08:33:23',
                'updated_at' => '2020-07-08 08:33:23',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'sous_categories',
                'slug' => 'sous-categories',
                'display_name_singular' => 'Sous Catégorie',
                'display_name_plural' => 'Sous Catégories',
                'icon' => NULL,
                'model_name' => 'App\\SousCategorie',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-07-08 08:37:19',
                'updated_at' => '2020-07-08 08:37:19',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => NULL,
                'model_name' => 'App\\Page',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-07-10 13:40:31',
                'updated_at' => '2020-07-10 17:01:47',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'faqs',
                'slug' => 'faqs',
                'display_name_singular' => 'Faq',
                'display_name_plural' => 'Faqs',
                'icon' => NULL,
                'model_name' => 'App\\Faq',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-07-17 12:42:11',
                'updated_at' => '2020-07-17 12:42:11',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'faq_categories',
                'slug' => 'faq-categories',
                'display_name_singular' => 'Catégorie faq',
                'display_name_plural' => 'Catégories faq',
                'icon' => NULL,
                'model_name' => 'App\\FaqCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-03 06:36:45',
                'updated_at' => '2020-08-03 06:36:45',
            ),
        ));
        
        
    }
}