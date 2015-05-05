<?php
namespace yii\easyii\modules\shopcart;

class ShopcartModule extends \yii\easyii\components\Module
{
    public $settings = [
        'mailAdminOnNewOrder' => true,
        'subjectOnNewOrder' => 'New order',
        'templateOnNewOrder' => '@easyii/modules/shopcart/mail/new_order',
    ];

    public static $installConfig = [
        'title' => [
            'en' => 'Shopping cart',
            'ru' => 'Корзина',
        ],
        'icon' => 'shopping-cart',
        'order_num' => 120,
    ];
}