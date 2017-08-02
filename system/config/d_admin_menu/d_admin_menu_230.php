<?php
$_['d_admin_menu'] = [
        0 => [
            'id' => '1',
            'icon' => "fa-dashboard",
            'name' => "Dashboard",
            'lng_name' => "dashboard",
            'href' => "index.php?route=common/dashboard&token=",
            'children' => [],
            'sort_order' => 0,
        ],
        1 => [
            'id' => '2',
            'icon' => "fa-tags",
            'lng_name' => "catalog",
            'name' => "Catalog",
            'href' => "",
            'children' => [
                1 => [
                    'id' => '3',
                    'icon' => ">>",
                    'name' => "Categories",
                    'href' => "index.php?route=catalog/category&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '4',
                    'icon' => ">>",
                    'name' => "Products",
                    'href' => "index.php?route=catalog/product&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '5',
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'href' => "index.php?route=catalog/recurring&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ],
                4 => [
                    'id' => '6',
                    'icon' => ">>",
                    'name' => "Filters",
                    'href' => "index.php?route=catalog/filter&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 4,
                ],
                5 => [
                    'id' => '7',
                    'icon' => ">>",
                    'name' => "Attributes",
                    'href' => "",
                    'children' => [
                        1 => ['id' => '8',
                            'icon' => ">>",
                            'name' => "Attributes",
                            'href' => "index.php?route=catalog/attribute&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1],
                        2 => ['id' => '9',
                            'icon' => ">>",
                            'name' => "Attribute Groups",
                            'href' => "index.php?route=catalog/attribute_group&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2],
                    ],
                    'is_visible' => 1,
                    'sort_order' => 5,
                ],
                6 => [
                    'id' => '10',
                    'icon' => ">>",
                    'name' => "Options",
                    'href' => "index.php?route=catalog/option&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 6,
                ],
                7 => [
                    'id' => '11',
                    'icon' => ">>",
                    'name' => "Manufactures",
                    'href' => "index.php?route=catalog/manufacturer&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 7,
                ],
                8 => [
                    'id' => '12',
                    'icon' => ">>",
                    'name' => "Downloads",
                    'href' => "index.php?route=catalog/download&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 8,
                ],
                9 => [
                    'id' => '13',
                    'icon' => ">>",
                    'name' => "Reviews",
                    'href' => "index.php?route=catalog/review&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 9,
                ],
                10 => [
                    'id' => '14',
                    'icon' => ">>",
                    'name' => "Information",
                    'href' => "index.php?route=catalog/information&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 10,
                ],

            ],
            'sort_order' => 1,
        ],
        2 => [
            'id' => '15',
            'icon' => "fa-puzzle-piece",
            'name' => "Extensions",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '16',
                    'icon' => ">>",
                    'name' => "Extension Installer",
                    'href' => "index.php?route=extension/installer&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '17',
                    'icon' => ">>",
                    'name' => "Extensions",
                    'href' => "index.php?route=extension/extension&token=",
                    'children' => [],
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '18',
                    'icon' => ">>",
                    'name' => "Modifications",
                    'href' => "index.php?route=extension/modification&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '19',
                    'icon' => ">>",
                    'name' => "Events",
                    'href' => "index.php?route=extension/event&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ],

            ],
            'sort_order' => 2,
        ],
        3 => [
            'id' => '20',
            'icon' => "fa-television",
            'name' => "Design",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '21',
                    'icon' => ">>",
                    'name' => "Layouts",
                    'href' => "index.php?route=design/layout&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '21',
                    'icon' => ">>",
                    'name' => "Banners",
                    'href' => "index.php?route=design/banner&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
            ],
            'sort_order' => 3,
        ],
        4 => [
            'id' => '22',
            'icon' => "fa-shopping-cart",
            'name' => "Sales",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '23',
                    'icon' => ">>",
                    'name' => "Orders",
                    'href' => "index.php?route=sale/order&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '24',
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'href' => "index.php?route=sale/recurring&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '25',
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'href' => "index.php?route=sale/return&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '26',
                    'icon' => ">>",
                    'name' => "Gift Vouchers",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '27',
                            'icon' => ">>",
                            'name' => "Gift Vouchers",
                            'href' => "index.php?route=sale/voucher&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '28',
                            'icon' => ">>",
                            'name' => "Voucher Themes",
                            'href' => "index.php?route=sale/voucher_theme&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                    ],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ],
            ],
            'sort_order' => 4,
        ],
        5 => [
            'id' => '29',
            'icon' => "fa-user",
            'name' => "Customers",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '30',
                    'icon' => ">>",
                    'name' => "Customers",
                    'href' => "index.php?route=customer/customer&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '31',
                    'icon' => ">>",
                    'name' => "Customer Groups",
                    'href' => "index.php?route=customer/customer_group&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '32',
                    'icon' => ">>",
                    'name' => "Custom Fields",
                    'href' => "index.php?route=customer/custom_field&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
            ],
            'sort_order' => 5,
        ],
        6 => [
            'id' => '33',
            'icon' => "fa-share-alt",
            'name' => "Marketing",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '34',
                    'icon' => ">>",
                    'name' => "Marketing",
                    'href' => "index.php?route=marketing/marketing&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '35',
                    'icon' => ">>",
                    'name' => "Affiliates",
                    'href' => "index.php?route=marketing/affiliate&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '36',
                    'icon' => ">>",
                    'name' => "Coupons",
                    'href' => "index.php?route=marketing/coupon&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '37',
                    'icon' => ">>",
                    'name' => "Mail",
                    'href' => "index.php?route=marketing/contact&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ],
            ],
            'sort_order' => 6,
        ],
        7 => [
            'id' => '38',
            'icon' => "fa-cog",
            'name' => "System",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '39',
                    'icon' => ">>",
                    'name' => "Settings",
                    'href' => "index.php?route=setting/store&token=",
                    'children' => [],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '40',
                    'icon' => ">>",
                    'name' => "Users",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '41',
                            'icon' => ">>",
                            'name' => "Users",
                            'href' => "index.php?route=user/user&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '42',
                            'icon' => ">>",
                            'name' => "User Groups",
                            'href' => "index.php?route=user/user_permission&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                        2 => [
                            'id' => '43',
                            'icon' => ">>",
                            'name' => "API",
                            'href' => "index.php?route=user/api&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ],
                    ],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '44',
                    'icon' => ">>",
                    'name' => "Localisation",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '45',
                            'icon' => ">>",
                            'name' => "Store Location",
                            'href' => "index.php?route=localisation/location&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '46',
                            'icon' => ">>",
                            'name' => "Languages",
                            'href' => "index.php?route=localisation/language&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                        2 => [
                            'id' => '47',
                            'icon' => ">>",
                            'name' => "Currencies",
                            'href' => "index.php?route=localisation/currency&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ],
                        3 => [
                            'id' => '48',
                            'icon' => ">>",
                            'name' => "Stock Statuses",
                            'href' => "index.php?route=localisation/stock_status&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 3,
                        ],
                        4 => [
                            'id' => '49',
                            'icon' => ">>",
                            'name' => "Order Statuses",
                            'href' => "index.php?route=localisation/order_status&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 4,
                        ],
                        5 => [
                            'id' => '50',
                            'icon' => ">>",
                            'name' => "Returns",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'id' => '51',
                                    'icon' => ">>",
                                    'name' => "Return Statuses",
                                    'href' => "index.php?route=localisation/return_status&token=",
                                    'children' => [],
                                    'is_visible' => 1,
                                    'sort_order' => 0,
                                ],
                                1 => [
                                    'id' => '52',
                                    'icon' => ">>",
                                    'name' => "Return Actions",
                                    'href' => "index.php?route=localisation/return_action&token=",
                                    'children' => [],
                                    'is_visible' => 1,
                                    'sort_order' => 1,
                                ],
                                2 => [
                                    'id' => '53',
                                    'icon' => ">>",
                                    'name' => "Return Reasons",
                                    'href' => "index.php?route=localisation/return_reason&token=",
                                    'children' => [],
                                    'is_visible' => 1,
                                    'sort_order' => 2,
                                ],
                            ],
                            'is_visible' => 1,
                            'sort_order' => 5,
                        ],
                        6 => [
                            'id' => '54',
                            'icon' => ">>",
                            'name' => "Countries",
                            'href' => "index.php?route=localisation/country&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 6,
                        ],
                        7 => [
                            'id' => '55',
                            'icon' => ">>",
                            'name' => "Zones",
                            'href' => "index.php?route=localisation/zone&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 7,
                        ],
                        8 => [
                            'id' => '56',
                            'icon' => ">>",
                            'name' => "Geo Zones",
                            'href' => "index.php?route=localisation/geo_zone&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 9,
                        ],
                        9 => [
                            'id' => '57',
                            'icon' => ">>",
                            'name' => "Taxes",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'id' => '58',
                                    'icon' => ">>",
                                    'name' => "Taxs Classes",
                                    'href' => "index.php?route=localisation/tax_class&token=",
                                    'children' => [],
                                    'is_visible' => 1,
                                    'sort_order' => 0,
                                ],
                                1 => [
                                    'id' => '59',
                                    'icon' => ">>",
                                    'name' => "Tax Rates",
                                    'href' => "index.php?route=localisation/tax_rate&token=",
                                    'children' => [],
                                    'is_visible' => 1,
                                    'sort_order' => 1,
                                ],
                            ],
                            'sort_order' => 9,
                        ],
                        10 => [
                            'id' => '60',
                            'icon' => ">>",
                            'name' => "Length Classes",
                            'href' => "index.php?route=localisation/length_class&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 10,
                        ],
                        11 => [
                            'id' => '61',
                            'icon' => ">>",
                            'name' => "Weight Classes",
                            'href' => "index.php?route=localisation/weight_class&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 11,
                        ],
                    ],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '62',
                    'icon' => ">>",
                    'name' => "Tools",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '63',
                            'icon' => ">>",
                            'name' => "Uploads",
                            'href' => "index.php?route=tool/upload&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '64',
                            'icon' => ">>",
                            'name' => "Backup / Restore",
                            'href' => "index.php?route=tool/backup&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ],
                        3 => [
                            'id' => '65',
                            'icon' => ">>",
                            'name' => "Error Logs",
                            'href' => "index.php?route=tool/log&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 3,
                        ]
                    ],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ],
            ],


            'sort_order' => 7,
        ],
        8 => [
            'id' => '66',
            'icon' => "fa-bar-chart-o",
            'name' => "Reports",
            'href' => "",
            'children' => [
                0 => [
                    'id' => '67',
                    'icon' => ">>",
                    'name' => "Sales",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '68',
                            'icon' => ">>",
                            'name' => "Orders",
                            'href' => "index.php?route=report/sale_order&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '69',
                            'icon' => ">>",
                            'name' => "Tax",
                            'href' => "index.php?route=report/sale_tax&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                        2 => [
                            'id' => '70',
                            'icon' => ">>",
                            'name' => "Shipping",
                            'href' => "index.php?route=report/sale_shipping&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ],
                        3 => [
                            'id' => '71',
                            'icon' => ">>",
                            'name' => "Returns",
                            'href' => "index.php?route=report/sale_return&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 3,
                        ],
                        4 => [
                            'id' => '72',
                            'icon' => ">>",
                            'name' => "Coupons",
                            'href' => "index.php?route=report/sale_coupon&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 4,
                        ]
                    ],
                    'is_visible' => 1,
                    'sort_order' => 0,
                ],
                1 => [
                    'id' => '73',
                    'icon' => ">>",
                    'name' => "Products",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '74',
                            'icon' => ">>",
                            'name' => "Viewed",
                            'href' => "index.php?route=report/product_viewed&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '75',
                            'icon' => ">>",
                            'name' => "Orders",
                            'href' => "index.php?route=report/product_purchased&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                    'sort_order' => 1,
                ],
                2 => [
                    'id' => '76',
                    'icon' => ">>",
                    'name' => "Customers",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '77',
                            'icon' => ">>",
                            'name' => "Customers Online",
                            'href' => "index.php?route=report/customer_online&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '78',
                            'icon' => ">>",
                            'name' => "Customer Activity",
                            'href' => "index.php?route=report/customer_activity&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                        2 => [
                            'id' => '79',
                            'icon' => ">>",
                            'name' => "Customer Searches",
                            'href' => "index.php?route=report/customer_search&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ],
                        3 => [
                            'id' => '80',
                            'icon' => ">>",
                            'name' => "Orders",
                            'href' => "index.php?route=report/customer_order&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 3,
                        ],
                        4 => [
                            'id' => '81',
                            'icon' => ">>",
                            'name' => "Reward Points",
                            'href' => "index.php?route=report/customer_reward&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 4,
                        ],
                        5 => [
                            'id' => '82',
                            'icon' => ">>",
                            'name' => "Credit",
                            'href' => "index.php?route=report/customer_credit&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 5,
                        ]
                    ],
                    'is_visible' => 1,
                    'sort_order' => 2,
                ],
                3 => [
                    'id' => '83',
                    'icon' => ">>",
                    'name' => "Marketing",
                    'href' => "",
                    'children' => [
                        0 => [
                            'id' => '84',
                            'icon' => ">>",
                            'name' => "Marketing",
                            'href' => "index.php?route=report/marketing&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 0,
                        ],
                        1 => [
                            'id' => '85',
                            'icon' => ">>",
                            'name' => "Affiliates",
                            'href' => "index.php?route=report/affiliate&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 1,
                        ],
                        2 => [
                            'id' => '86',
                            'icon' => ">>",
                            'name' => "Affiliate Activity",
                            'href' => "index.php?route=report/affiliate_activity&token=",
                            'children' => [],
                            'is_visible' => 1,
                            'sort_order' => 2,
                        ]
                    ],
                    'is_visible' => 1,
                    'sort_order' => 3,
                ]

            ],
            'sort_order' => 8,
        ]

];
