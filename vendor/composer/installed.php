<?php return array(
    'root' => array(
        'name' => 'instawp/cli-package',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '98a4508b0aadbbe07f8ad94d6ad97386cfe7d1fc',
        'type' => 'wp-cli-package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'instawp/cli-package' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '98a4508b0aadbbe07f8ad94d6ad97386cfe7d1fc',
            'type' => 'wp-cli-package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'instawp/connect-helpers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'd8b3481664fa8efe61f256a00bc4a262ec0afdd5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instawp/connect-helpers',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'wp-cli/wp-config-transformer' => array(
            'pretty_version' => 'v1.3.4',
            'version' => '1.3.4.0',
            'reference' => '1f80df413c0d779a813223d9dd5dd58358eee60c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-cli/wp-config-transformer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
