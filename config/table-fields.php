<?php 

return [
    'mst_employees' => [
        'name' => [
            'label' => 'Nama',
            'type'  => 'text',
        ],
        'address' => [
            'label' => 'Alamat',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'address_2' => [
            'label' => 'Alamat 2',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'city' => [
            'label' => 'Kota',
            'type'  => 'text',
        ],
        'phone' => [
            'label' => 'No. HP',
            'type'  => 'text',
        ],
        'description' => [
            'label' => 'Keterangan',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'status' => [
            'label' => 'Status',
            'type'  => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_suppliers' => [
        'name' => [
            'label' => 'Nama',
            'type'  => 'text',
        ],
        'address' => [
            'label' => 'Alamat',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'address_2' => [
            'label' => 'Alamat 2',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'city' => [
            'label' => 'Kota',
            'type'  => 'text',
        ],
        'phone' => [
            'label' => 'No. HP',
            'type'  => 'text',
        ],
        'description' => [
            'label' => 'Keterangan',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'status' => [
            'label' => 'Status',
            'type'  => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_customers' => [
        'name' => [
            'label' => 'Nama',
            'type'  => 'text',
        ],
        'address' => [
            'label' => 'Alamat',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'address_2' => [
            'label' => 'Alamat 2',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'city' => [
            'label' => 'Kota',
            'type'  => 'text',
        ],
        'phone' => [
            'label' => 'No. HP',
            'type'  => 'text',
        ],
        'description' => [
            'label' => 'Keterangan',
            'type'  => 'textarea',
            'attr'  => [
                'class' => 'form-control select2-search__field'
            ]
        ],
        'status' => [
            'label' => 'Status',
            'type'  => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_items' => [
        'category_id' => [
            'label' => 'Kategori',
            'type'  => 'options-obj:mst_categories,id,name|record_type,BARANG',
        ],
        'name' => [
            'label' => 'Nama',
            'type'  => 'text',
        ],
        'price' => [
            'label' => 'Harga',
            'type' => 'number',
            'attr' => [
                'data-type' => 'currency',
                'class' => 'form-control'
            ]
        ],
        'unit' => [
            'label' => 'Satuan',
            'type'  => 'text',
        ],
        'status' => [
            'label' => 'Status',
            'type'  => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_services' => [
        'category_id' => [
            'label' => 'Kategori',
            'type'  => 'options-obj:mst_categories,id,name|record_type,JASA',
        ],
        'name' => [
            'label' => 'Nama',
            'type'  => 'text',
        ],
        'price' => [
            'label' => 'Harga',
            'type' => 'number',
            'attr' => [
                'data-type' => 'currency',
                'class' => 'form-control'
            ]
        ],
        'unit' => [
            'label' => 'Satuan',
            'type'  => 'text',
        ],
        'status' => [
            'label' => 'Status',
            'type'  => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_banks' => [
        'name' => [
            'label' => 'Nama',
            'type' => 'text',
        ],
        'status' => [
            'label' => 'Status',
            'type' => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_partners' => [
        'name' => [
            'label' => 'Nama',
            'type' => 'text',
        ],
        'status' => [
            'label' => 'Status',
            'type' => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_costs' => [
        'name' => [
            'label' => 'Nama',
            'type' => 'text',
        ],
        'status' => [
            'label' => 'Status',
            'type' => 'options:ACTIVE|INACTIVE',
        ],
        '_userstamp' => true,
    ],
    'mst_categories' => [
        'name' => [
            'label' => 'Nama',
            'type' => 'text',
        ],
        'record_type' => [
            'label' => 'Tipe Kategori',
            'type' => 'options:BARANG|JASA',
        ],
        '_userstamp' => true,
    ]
];