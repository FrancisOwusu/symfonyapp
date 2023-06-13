<?php
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->import('legacy_config.php');

    // glob expressions are also supported to load multiple files
    $containerConfigurator->import('/etc/myapp/*.yaml');

    // the third optional argument of import() is 'ignore_errors'
    // 'ignore_errors' set to 'not_found' silently discards errors if the loaded file doesn't exist
    $containerConfigurator->import('my_config_file.yaml', null, 'not_found');
    // 'ignore_errors' set to true silently discards all errors (including invalid code and not found)
    $containerConfigurator->import('my_config_file.yaml', null, true);
};

// ...