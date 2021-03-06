<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.1@e927fc2410c8723d053b8032e591cdff76587cdb',
  'doctrine/dbal' => '3.2.1@4caf37acf14b513a91dd4f087f7eda424fa25542',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.5@5c086cbbe5327937dd6f90da075f7d421b0f28bc',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => '2.10.4@cccb2e2fdfed2969afb3d65c5ea82bafdefbe1a7',
  'doctrine/persistence' => '2.3.0@f8af155c1e7963f3d2b4415097d55757bbaa53d8',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'easycorp/easyadmin-bundle' => 'v3.5.18@aa15b32391b578cd6a2928e6fb7aeb2acb96af64',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'symfony/asset' => 'v5.4.0@49e355b57b4b6a5cef1d2dbc4e36cee49369cf7d',
  'symfony/cache' => 'v5.4.2@8aad4b69a10c5c51ab54672e78995860f5e447ec',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.2@2e082dae50da563c639119b7b52347a2a3db4ba5',
  'symfony/console' => 'v5.4.2@a2c6b7ced2eb7799a35375fb9022519282b5405e',
  'symfony/dependency-injection' => 'v5.4.2@ba94559be9738d77cd29e24b5d81cf3b89b7d628',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.4.2@1afa4465ead0d1f59decc8cb6111b89848e819d3',
  'symfony/error-handler' => 'v5.4.2@e0c0dd0f9d4120a20158fc9aec2367d07d38bc56',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/filesystem' => 'v5.4.0@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/finder' => 'v5.4.2@e77046c252be48c48a40816187ed527703c8f76c',
  'symfony/form' => 'v5.4.2@2083142efa11a2e32c71a78c8f8cce0c1210fa10',
  'symfony/framework-bundle' => 'v5.4.2@2e6b8b208a998a08a94be407498f21bae62a8a4a',
  'symfony/http-foundation' => 'v5.4.2@ce952af52877eaf3eab5d0c08cc0ea865ed37313',
  'symfony/http-kernel' => 'v5.4.2@35b7e9868953e0d1df84320bb063543369e43ef5',
  'symfony/intl' => 'v5.4.2@ee6512e06b1307ed61b32d292ecd8ee9c10e034c',
  'symfony/options-resolver' => 'v5.4.0@b0fb78576487af19c500aaddb269fd36701d4847',
  'symfony/password-hasher' => 'v5.4.2@62748882f339e2a00751af8375258cf1b66a1c57',
  'symfony/polyfill-ctype' => 'v1.24.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/polyfill-uuid' => 'v1.24.0@7529922412d23ac44413d0f308861d50cf68d3ee',
  'symfony/property-access' => 'v5.4.2@133c62a1be8a868134c4cced928568568d6b26f8',
  'symfony/property-info' => 'v5.4.2@a32f813896ffb3b4710fca5af5b05bef600cf4f0',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/security-bundle' => 'v5.4.2@4da15c5a30ec90acb4dd2d27b2e046385212192e',
  'symfony/security-core' => 'v5.4.2@11d87d17650a5b8b21da8b6df208bfc8a9b918c7',
  'symfony/security-csrf' => 'v5.4.0@a6bfeedc3fcaafd2eb9ce61f0eb6a95e0316a3e2',
  'symfony/security-guard' => 'v5.4.0@5ebbe00731ce0773108116875083a82098ddddcf',
  'symfony/security-http' => 'v5.4.2@3682db42fc542ad4b42a2e0d064cb25e13df494a',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => 'v5.4.2@e6a5d5ecf6589c5247d18e0e74e30b11dfd51a3d',
  'symfony/translation' => 'v5.4.2@ff8bb2107b6a549dc3c5dd9c498dcc82c9c098ca',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.4.0@faed6ad85a2f8e675820422a74c4e0d5858a6821',
  'symfony/twig-bundle' => 'v5.4.0@de8634b8c604a42277c6cc7e4f0d1e9e30c5ec7f',
  'symfony/uid' => 'v5.4.2@89b2e717aa45a57cc0dbe8bff57b9d15b919c67b',
  'symfony/var-dumper' => 'v5.4.2@1b56c32c3679002b3a42384a580e16e2600f41c1',
  'symfony/var-exporter' => 'v5.4.2@2360c8525815b8535caac27cbc1994e2fa8644ba',
  'twig/twig' => 'v3.3.7@8f168c6ffa3ce76d1786b3cd52275424a3fc675b',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
