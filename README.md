# Craft 5 Basic Starter

This is a pure Craft CMS starter as provided in the craftcms/craft package with 
the following additions:


* Set system timezone to Europe/Berlin
* Use a single `.env.example` file for all environments
* Use environment specific config settings to config/general.php, dependent on CRAFT_ENVIRONMENT variable
* Added more config settings to config/general.php
* Added modules/_faux to enable autocompletion for some most frequently used variables in twig
* Added /web/cpresources, /node_modules, /config/license.key to .gitignore
* Added setup/install for automated installation under ddev, creates a user with user defined username/password.
* Prepared optional Tailwind installation
* Added scaffolding example page `templates/examples/page-simplecss.twig`
* Added scaffolding example page `templates/examples/page-tailwind.twig`
* Prepared for local plugin development and using the `extras` plugin as an example

## DDEV Installation

* Clone repository
* `cd` into project directory
* Run `bash setup/install <projectname> <username> <password>`

Requires DDEV v1.24.6 +

## Non-DDEV Installation

* Clone repository
* `cd` into project directory
* Prepare web server and database according to Craft CMS requirements
* Run `composer install`
* Run `./craft setup`
* Make sure `PRIMARY_SITE_URL` and `CRAFT_WEB_ROOT` are set correctly in `.env` file

## Install Tailwind CSS (optional)

* `cd` into project directory
* Run `bash setup/install-tailwind`

## Install Extras Plugin (optional)

This project is prepared for local plugin development. The `extras` plugin is used as an example.

* `docker-compose.mounts.yaml` is provided to mount the plugin directory
* `composer.json` has the necessary additions to use the `extras` local plugins
* * `minimum-stability` is set to `dev`
* * `prefer-stable` is set to `true`
* * `repositories` section is added for the `extras` plugin

Install the `extras` plugin as follows:

* `cd` into project directory
* Run `bash setup/install-extras`
* Navigate to the CP settings page and activate the options needed for your project.

For other plugins, add the repository paths `composer.json` accordingly.