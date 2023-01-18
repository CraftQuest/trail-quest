<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    // Craft config settings from .env variables
    'aliases' => [
        '@assetsUrl' => App::env('ASSETS_URL'),
        '@cloudfrontUrl' => App::env('CLOUDFRONT_URL'),
        '@web' => App::env('SITE_URL'),
        '@webroot' => App::env('WEB_ROOT_PATH'),
    ],
    'allowUpdates' => (bool)App::env('ALLOW_UPDATES'),
    'allowAdminChanges' => (bool)App::env('ALLOW_ADMIN_CHANGES'),
    'backupOnUpdate' => (bool)App::env('BACKUP_ON_UPDATE'),
    'devMode' => (bool)App::env('DEV_MODE'),
    'enableTemplateCaching' => (bool)App::env('ENABLE_TEMPLATE_CACHING'),
    'resourceBasePath' => App::env('WEB_ROOT_PATH') . '/cpresources',
    'runQueueAutomatically' => (bool)App::env('RUN_QUEUE_AUTOMATICALLY'),
    'securityKey' => App::env('SECURITY_KEY'),
    // Craft config settings from constants
    'cacheDuration' => false,
    'defaultSearchTermOptions' => [
        'subLeft' => true,
        'subRight' => true,
    ],
    'defaultTokenDuration' => 'P2W',
    'enableCsrfProtection' => true,
    'errorTemplatePrefix' => 'errors/',
    'generateTransformsBeforePageLoad' => true,
    'maxCachedCloudImageSize' => 3000,
    'maxUploadFileSize' => '100M',
    'omitScriptNameInUrls' => true,
    'useEmailAsUsername' => false,
    'usePathInfo' => true,
    'postCpLoginRedirect' => 'entries?source=custom%3A3fc06fef-aba8-4a8e-a40d-9e1f1ba33b42',
    'cpHeadTags' => [
        ['link', ['rel' => 'icon', 'href' => '/dist/assets/favicons/favicon.ico']],
        ['link', ['rel' => 'icon', 'sizes' => '32x32', 'href' => '/dist/assets/favicons/favicon-32x32.png']],
        ['link', ['rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => '/dist/assets/favicons/apple-touch-icon-180x180.png']]
    ]
];
