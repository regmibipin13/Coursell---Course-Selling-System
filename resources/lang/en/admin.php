<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'name' => 'Name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation'
            
        ],
    ],

    'category' => [
        'title' => 'Categories',

        'actions' => [
            'index' => 'Categories',
            'create' => 'New Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'course' => [
        'title' => 'Courses',

        'actions' => [
            'index' => 'Courses',
            'create' => 'New Course',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'description' => 'Description',
            'name' => 'Name',
            'total_duration' => 'Total duration',
            'categories' => 'Categories',
            'suscriptions' => 'Suscriptions'
            
        ],
    ],

    'episode' => [
        'title' => 'Episodes',

        'actions' => [
            'index' => 'Episodes',
            'create' => 'New Episode',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'suscription' => [
        'title' => 'Suscriptions',

        'actions' => [
            'index' => 'Suscriptions',
            'create' => 'New Suscription',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'episode' => [
        'title' => 'Episodes',

        'actions' => [
            'index' => 'Episodes',
            'create' => 'New Episode',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'description' => 'Description',
            'duration' => 'Duration',
            'title' => 'Title',
            
        ],
    ],

    'episode' => [
        'title' => 'Episodes',

        'actions' => [
            'index' => 'Episodes',
            'create' => 'New Episode',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'course_id' => 'Course',
            'description' => 'Description',
            'duration' => 'Duration',
            'title' => 'Title',
            
        ],
    ],

    'category' => [
        'title' => 'Categories',

        'actions' => [
            'index' => 'Categories',
            'create' => 'New Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'suscription' => [
        'title' => 'Suscriptions',

        'actions' => [
            'index' => 'Suscriptions',
            'create' => 'New Suscription',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'features' => 'Features',
            'name' => 'Name',
            'price' => 'Price',
            
        ],
    ],

    'suscription' => [
        'title' => 'Suscriptions',

        'actions' => [
            'index' => 'Suscriptions',
            'create' => 'New Suscription',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'features' => 'Features',
            'name' => 'Name',
            'price' => 'Price',
            'type' => 'Type',
            
        ],
    ],

    'founder' => [
        'title' => 'Founder',

        'actions' => [
            'index' => 'Founder',
            'create' => 'New Founder',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'founder' => [
        'title' => 'Founder',

        'actions' => [
            'index' => 'Founder',
            'create' => 'New Founder',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'description' => 'Description',
            'email' => 'Email',
            'full_name' => 'Full name',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            'suscription_id' => 'Suscription',
            'trail_ends_at' => 'Trail ends at',
            'ends_at' => 'Ends at',
            'started_at' => 'Started at',
            
        ],
    ],

    'suscription' => [
        'title' => 'Suscriptions',

        'actions' => [
            'index' => 'Suscriptions',
            'create' => 'New Suscription',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'features' => 'Features',
            'price' => 'Price',
            'type' => 'Type',
            'stripe_id' => 'Stripe',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];