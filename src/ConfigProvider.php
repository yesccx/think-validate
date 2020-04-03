<?php

declare (strict_types = 1);

namespace Yesccx\ThinkValidate;

class ConfigProvider {

    public function __invoke(): array{
        return [
            'dependencies' => [
            ],
            'commands'     => [
            ],
            'listeners'    => [],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish'      => [
                [
                    'id'          => 'think-validate',
                    'description' => 'use think validate engine for hyperf',
                    'source'      => __DIR__ . '/../publish/think-validate.php',
                    'destination' => BASE_PATH . '/config/autoload/think-validate.php',
                ],
            ],
        ];
    }
}
