<?php return array(
    'root' => array(
        'name' => 'instawp/cli-package',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'ed8e6e75cfb0e6081cb58c21ab95d447a9655235',
        'type' => 'wp-cli-package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'instawp/cli-package' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'ed8e6e75cfb0e6081cb58c21ab95d447a9655235',
            'type' => 'wp-cli-package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'instawp/connect-helpers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '77e1f07e361e1465a6761d092e8f6f85f48a4ac5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instawp/connect-helpers',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'wp-cli/wp-config-transformer' => array(
            'pretty_version' => 'v1.3.3',
            'version' => '1.3.3.0',
            'reference' => 'b1a6a013e4a8c74b29ba185368b78a140b3268da',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-cli/wp-config-transformer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
