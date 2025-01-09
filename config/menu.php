<?php

return [
    [
        'label' => 'manajemen.menu.master',
        'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-cube',
        'activeState' => [
            'manajemen.mst_employees',
            'manajemen.mst_customers',
            'manajemen.mst_suppliers',
            'manajemen.mst_partners',
            'manajemen.mst_banks',
            'manajemen.mst_costs',
        ],
        'items' => [
            [
                'label' => 'manajemen.menu.employees',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-people-carry',
                'route' => routeTo('crud/index',['table'=>'mst_employees']),
                'activeState' => 'manajemen.mst_employees'
            ],
            [
                'label' => 'manajemen.menu.customers',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-users',
                'route' => routeTo('crud/index',['table'=>'mst_customers']),
                'activeState' => 'manajemen.mst_customers'
            ],
            [
                'label' => 'manajemen.menu.suppliers',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-people-carry',
                'route' => routeTo('crud/index',['table'=>'mst_suppliers']),
                'activeState' => 'manajemen.mst_suppliers'
            ],
            [
                'label' => 'manajemen.menu.partners',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-fill-drip',
                'route' => routeTo('crud/index',['table'=>'mst_partners']),
                'activeState' => 'manajemen.mst_partners'
            ],
            [
                'label' => 'manajemen.menu.banks',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-box-open',
                'route' => routeTo('crud/index',['table'=>'mst_banks']),
                'activeState' => 'manajemen.mst_banks'
            ],
            [
                'label' => 'manajemen.menu.costs',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-box-open',
                'route' => routeTo('crud/index',['table'=>'mst_costs']),
                'activeState' => 'manajemen.mst_costs'
            ],
            
        ]
    ],
    [
        'label' => 'manajemen.menu.product_data',
        'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-stream',
        'activeState' => [
            'manajemen.mst_categories',
            'manajemen.mst_items',
            'manajemen.mst_services',
        ],
        'items' => [
            [
                'label' => 'manajemen.menu.categories',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-stream',
                'route' => routeTo('crud/index',['table' => 'mst_categories']),
                'activeState' => 'manajemen.mst_categories'
            ],
            [
                'label' => 'manajemen.menu.items',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-compress-arrows-alt',
                'route' => routeTo('crud/index',['table' => 'mst_items']),
                'activeState' => 'manajemen.mst_items'
            ],
            [
                'label' => 'manajemen.menu.services',
                'icon'  => 'fa-fw fa-lg me-2 fa-solid fa-stamp',
                'route' => routeTo('crud/index',['table'=>'mst_services']),
                'activeState' => 'manajemen.mst_services'
            ],
        ]
    ],
];