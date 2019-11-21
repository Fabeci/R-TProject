<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Navigation Menu
    |--------------------------------------------------------------------------
    |
    | This array is for Navigation menus of the backend.  Just add/edit or
    | remove the elements from this array which will automatically change the
    | navigation.
    |
    */

    // SIDEBAR LAYOUT - MENU

    'sidebar' => [
        // [
        //     'title' => 'Tableau de bord',
        //     'link' => '#',
        //     'active' => 'admin/dashboard*',
        //     'icon' => 'icon-fa icon-fa-dashboard',
        //     'children' => [
        //         [
        //             'title' => 'Basic',
        //             'link' => '/admin/dashboard/basic',
        //             'active' => 'admin/dashboard/basic',
        //         ],
        //         [
        //             'title' => 'Ecommerce',
        //             'link' => '/admin/dashboard/ecommerce',
        //             'active' => 'admin/dashboard/ecommerce',
        //         ],
        //         [
        //             'title' => 'Finance',
        //             'link' => '/admin/dashboard/finance',
        //             'active' => 'admin/dashboard/finance',
        //         ]
        //     ]
        // ],
        [
            'title' => 'Tableau de bord',
            'link' => '/admin/dashboard/basic',
            'active' => 'admin/dashboard/basic',
            'icon' => 'icon-fa icon-fa-dashboard',
        ],
        [
            'title' => 'Paramètres',
            'link' => '#',
            'active' => 'admin/layouts*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link' => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link' => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link' => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ]
            ]
        ],
        [
            'title' => 'Gestion de projets',
            'link' => '/admin/forms/advanced',
            'active' => 'admin/forms/advanced',
            'icon' => 'icon-fa icon-fa-book',
            // 'children' => [
            //     [
            //         'title' => 'Buttons',
            //         'link' => '/admin/basic-ui/buttons',
            //         'active' => 'admin/basic-ui/buttons',
            //     ],
            //     [
            //         'title' => 'Cards',
            //         'link' => '/admin/basic-ui/cards',
            //         'active' => 'admin/basic-ui/cards',
            //     ],
            //     [
            //         'title' => 'Tabs & Accordians',
            //         'link' => '/admin/basic-ui/tabs',
            //         'active' => 'admin/basic-ui/tabs',
            //     ],
            //     [
            //         'title' => 'Typography',
            //         'link' => '/admin/basic-ui/typography',
            //         'active' => 'admin/basic-ui/typography',
            //     ],
            //     [
            //         'title' => 'Tables',
            //         'link' => '/admin/basic-ui/tables',
            //         'active' => 'admin/basic-ui/tables',
            //     ],
            //     [
            //         'title' => 'Modals',
            //         'link' => '/admin/basic-ui/modals',
            //         'active' => 'admin/basic-ui/modals',
            //     ],
            //     [
            //         'title' => 'Progress Bar',
            //         'link' => '/admin/basic-ui/progress-bars',
            //         'active' => 'admin/basic-ui/progress-bars',
            //     ],
            // ]
        ],
        [
            'title' => 'Planning des tâches',
            'link' => '#',
            'active' => 'admin/components*',
            'icon' => 'icon-fa icon-fa-calendar-minus-o',
            'children' => [
                [
                    'title' => 'Tâches projets',
                    'link' => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Interventions',
                    'link' => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title'=>' Tâches personnelles',
                    'link'=>'/admin/components/nestable-list',
                    'active'=>'admin/components/nestable-list',
                ],
            ]
        ],
        [
            'title' => 'Report des tâches',
            'link' => '#',
            'active' => 'admin/charts*',
            'icon' => 'icon-fa icon-fa-calendar-check-o',
        ],
        [
            'title' => 'Calendrier',
            'link' => '#',
            'active' => 'admin/icons*',
            'icon' => 'icon-fa icon-fa-calendar',
        ],
        [
            'title' => 'Gestion des congés',
            'link' => '#',
            'active' => 'admin/forms',
            'icon' => 'icon-fa icon-fa-bed',
        ],
        // [
        //     'title' => 'Utilisateurs',
        //     'link' => '#',
        //     'active' => 'admin/gallery*',
        //     'icon' => 'icon-fa icon-fa-user',
        //     'children' => [
        //         [
        //             'title' => 'Personnel cfao',
        //             'link' => '/admin/gallery/grid',
        //             'active' => 'admin/gallery/grid',
        //         ],
        //         [
        //             'title' => 'Clients',
        //             'link' => '/admin/gallery/masonry-grid',
        //             'active' => 'admin/gallery/masonry-grid',
        //         ]
        //     ]
        // ],
        [
            'title' => 'Rapports & Stats',
            'link' => '#',
            'active' => 'admin/pages*',
            'icon' => 'icon-fa icon-fa-bar-chart-o',
            'children' => [
                [
                    'title' => 'Login',
                    'link'  => '/login',
                    'active' => 'login',
                ],
                [
                    'title' => 'Login 2',
                    'link'  => '/admin/login-2',
                    'active' => 'admin/login-2',
                ],
                [
                    'title' => 'Login 3',
                    'link'  => '/admin/login-3',
                    'active' => 'admin/login-3',
                ],
                [
                    'title' => 'Register',
                    'link' => '/register',
                    'active' => 'register',
                ],
                [
                    'title' => 'Register 2',
                    'link' => '/admin/register-2',
                    'active' => 'admin/register-2',
                ],
                [
                    'title' => 'Register 3',
                    'link' => '/admin/register-3',
                    'active' => 'admin/register-3',
                ],
                [
                    'title' => '404 Page',
                    'link' => '/admin/404',
                    'active' => 'admin/404',
                ],
                [
                    'title' => 'Maintenance Page',
                    'link' => '/admin/maintenance',
                    'active' => 'admin/maintenance',
                ],
            ]
        ],
        [
            'title' => 'Utilisateurs',
            'link' => '#',
            'active' => 'admin/users*',
            'icon' => 'icon-fa icon-fa-group',
            'children' => [
                [
                    'title' => 'Liste',
                    'link' => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'Mon Profil',
                    'link' => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
        // [
        //     'title' => 'Todo App',
        //     'link' => '/admin/todos',
        //     'active' => 'admin/todos*',
        //     'icon' => 'icon-fa icon-fa-check',
        // ],
        [
            'title' => 'Paramètres',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail Driver',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                ],
            ]
        ],
    ],

    // HORIZONTAL MENU LAYOUT -  MENU

    'horizontal' => [
        [
            'title' => 'Dashboard',
            'link' => '#',
            'active' => 'admin/dashboard*',
            'icon' => 'icon-fa icon-fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link' => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link' => '#',
            'active' => 'admin/layouts*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link' => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link' => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link' => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ],
            ]
        ],
        [
            'title' => 'Basic UI',
            'link' => '#',
            'active' => 'admin/basic-ui*',
            'icon' => 'icon-fa icon-fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link' => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link' => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link' => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link' => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link' => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ]
            ]
        ],
        [
            'title' => 'Components',
            'link' => '#',
            'active' => 'admin/components*',
            'icon' => 'icon-fa icon-fa-puzzle-piece',
            'children' => [
                [
                    'title' => 'Datatables',
                    'link' => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Notifications',
                    'link' => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title'=>' Nestable List',
                    'link'=>'/admin/components/nestable-list',
                    'active'=>'admin/components/nestable-list',
                ],
                [
                    'title'=>'Nestable Tree',
                    'link'=>'/admin/components/nestable-tree',
                    'active'=>'admin/components/nestable-tree',
                ],
                [
                    'title' => 'Image Cropper',
                    'link' => '/admin/components/image-cropper',
                    'active' => 'admin/components/image-cropper',
                ],
                [
                    'title' => 'Image Zoom',
                    'link' => '/admin/components/zoom',
                    'active' => 'admin/components/zoom',
                ],
                [
                    'title' => 'Calendar',
                    'link' => '/admin/components/calendar',
                    'active' => 'admin/components/calendar',
                ],
                [
                    'title' => 'Rating',
                    'link' => '#',
                    'active' => 'admin/components/ratings*',
                    'icon' => 'icon-fa icon-fa-star',
                    'children' => [
                        [
                            'title' => 'Star Ratings',
                            'link' => '/admin/components/ratings/star',
                            'active' => 'admin/components/ratings/star',
                        ],
                        [
                            'title' => 'Bar Ratings',
                            'link' => '/admin/components/ratings/bar',
                            'active' => 'admin/components/ratings/bar',
                        ],
                    ],
                ],
            ]
        ],
        [
            'title' => 'Todo App',
            'link' => '/admin/todos',
            'active' => 'admin/todos*',
            'icon' => 'icon-fa icon-fa-check',
        ],
        [
            'title' => 'Settings',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                    'icon' => 'icon-fa icon-fa-mail',
                ],
            ]
        ]
    ]
];
