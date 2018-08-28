<?php

return [
    'adminEmail' => 'admin@example.com',
    'pageSize'=>[
        'admin'=>10,

    ],
    'admin'=>[
        'topMenu'=>[
            ['label'=>'控制台','url'=>['admin/default/index']],
            ['label'=>'分类管理','url'=>['admin/category/index']],
            ['label'=>'菜品管理','url'=>['admin/dish/index']],
            ['label'=>'订单管理','url'=>['admin/order/index']],
        ]
    ]
];
