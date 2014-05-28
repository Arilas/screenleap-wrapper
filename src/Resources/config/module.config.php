<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 5/28/14
 * Time: 3:15 PM
 */

return [
    'arilas' => [
        'screenleap' => [
            'options' => [
                'accountId' => '',
                'token' => '',
            ],
        ],
    ],
    'service_manages' => [
        'factories' => [
            'arilas.screenleap' => 'Arilas\ScreenLeap\Service\ScreenLeapFactory'
        ],
    ],
];