<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'name'        => 'Tamimah',
    'description' => 'Tamimah Sms integration',
    'author'      => 'mazad.om',
    'version'     => '1.0.0',
    'services' => [
        'events'  => [],
        'forms'   => [
        ],
        'helpers' => [],
        'other'   => [
            'mautic.sms.transport.tamimah' => [
                'class'     => \MauticPlugin\MauticTamimahBundle\Services\TamimahApi::class,
                'arguments' => [
                    'mautic.page.model.trackable',
                    'mautic.helper.phone_number',
                    'mautic.helper.integration',
                    'monolog.logger.mautic',
                    'mautic.http.connector'
                ],
                'alias' => 'mautic.sms.config.transport.tamimah',
                'tag'          => 'mautic.sms_transport',
                'tagArguments' => [
                    'integrationAlias' => 'tamimah',
                ],
            ],
        ],
        'models'       => [],
        'integrations' => [
            'mautic.integration.tamimah' => [
                'class' => \MauticPlugin\MauticTamimahBundle\Integration\TamimahIntegration::class,
            ],
        ],
    ],
    'routes'     => [],
    'menu'       => [],
    'parameters' => [
    ],
];
