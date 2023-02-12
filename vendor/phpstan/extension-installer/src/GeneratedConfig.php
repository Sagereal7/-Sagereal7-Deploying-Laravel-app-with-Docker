<?php declare(strict_types = 1);

namespace PHPStan\ExtensionInstaller;

/**
 * This class is generated by phpstan/extension-installer.
 * @internal
 */
final class GeneratedConfig
{

	public const EXTENSIONS = array (
  'nesbot/carbon' => 
  array (
    'install_path' => '/var/www/vendor/nesbot/carbon',
    'relative_install_path' => '../../../nesbot/carbon',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
      ),
    ),
    'version' => '2.66.0',
  ),
  'nunomaduro/larastan' => 
  array (
    'install_path' => '/var/www/vendor/nunomaduro/larastan',
    'relative_install_path' => '../../../nunomaduro/larastan',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
      ),
    ),
    'version' => '2.4.0',
  ),
  'phpstan/phpstan-phpunit' => 
  array (
    'install_path' => '/var/www/vendor/phpstan/phpstan-phpunit',
    'relative_install_path' => '../../phpstan-phpunit',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.3.4',
  ),
);

	public const NOT_INSTALLED = array (
);

	private function __construct()
	{
	}

}
