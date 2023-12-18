<?php return array(
    'root' => array(
        'name' => 'instawp/cli-package',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '638a2892420b35cc460c088fcb7b017339284723',
        'type' => 'wp-cli-package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'instawp/cli-package' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '638a2892420b35cc460c088fcb7b017339284723',
            'type' => 'wp-cli-package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'instawp/connect-helpers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '649c706c4c3c338b902a4780e6aaa0db0670f674',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instawp/connect-helpers',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'wp-cli/wp-config-transformer' => array(
            'pretty_version' => 'v1.3.5',
            'version' => '1.3.5.0',
            'reference' => '202aa80528939159d52bc4026cee5453aec382db',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-cli/wp-config-transformer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
