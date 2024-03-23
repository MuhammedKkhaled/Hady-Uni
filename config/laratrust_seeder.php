<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            'roles'         => 'c,r,u,d',
            'admins'        => 'c,r,u,d',
            'users'         => 'c,r,u,d',
            'blogs'         => 'c,r,u,d',
            'abouts'        => 'c,r,u,d',
            'categories'    => 'c,r,u,d',
            'products'      => 'c,r,u,d',
            'settings'      => 'c,r,u,d',
            'news'          => 'c,r,u,d',
            'specifications'=> 'c,r,u,d',
            'departments'   => 'c,r,u,d',
            'conferences'   => 'c,r,u,d',
            'teachers'      => 'c,r,u,d',
            'properties'    => 'c,r,u,d',
            'libraries'     => 'c,r,u,d',
            'journals'      => 'c,r,u,d',
            'affiliates'      => 'c,r,u,d',
            'messages'      => 'c,r,u,d',
        ],
        'admin' => [],
        'user' => [],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
