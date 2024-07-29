<?php return array(
    'root' => array(
        'name' => 'instawp/cli-package',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'e46c9ad39939e64d5cbacbf5f7e4f2a8db789a0a',
        'type' => 'wp-cli-package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'instawp/cli-package' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'e46c9ad39939e64d5cbacbf5f7e4f2a8db789a0a',
            'type' => 'wp-cli-package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'instawp/connect-helpers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '28d2f2f6f8f17aee90ca1ac26b52ef76867acf80',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instawp/connect-helpers',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'wp-cli/wp-config-transformer' => array(
            'pretty_version' => 'v1.3.6',
            'version' => '1.3.6.0',
            'reference' => '88f516f44dce1660fc4b780da513e3ca12d7d24f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-cli/wp-config-transformer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
