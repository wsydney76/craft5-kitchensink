<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()

    // ---------- From craftcms/craft ----------

    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls()
    // Preload Single entries as Twig variables
    ->preloadSingles()
    // Prevent user enumeration attacks
    ->preventUserEnumeration()


    // ---------- Custom settings ----------

    // Don't let revisions pile up
    ->maxRevisions(3)
    // Remove non-ASCII characters from uploaded files
    ->convertFilenamesToAscii()
    // use only ASCII characters for auto-generated slugs
    ->limitAutoSlugsToAscii()
    // Don't allow temporary asset URLs
    ->generateTransformsBeforePageLoad(true)
    // Don't serve images with a lower quality
    ->optimizeImageFilesize(false)
    // Append a version hash to asset URLs
    ->revAssetUrls()
    ->aliases([
        // Prevent the @web alias from being set automatically (avoid cache poisoning vulnerability)
        '@web' => App::env('PRIMARY_SITE_URL'),
        // Set the @webroot alias so the clear-caches command knows where to find CP resources
        '@webroot' => dirname(__DIR__) . '/web',
    ]);