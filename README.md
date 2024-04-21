# Craft 5 Bare Bones Starter

This is a pure Craft CMS starter as provided in the craftcms/craft package with 
the following additions:


* Set system timezone to Europe/Berlin
* Use neutral names/@web alias for default site/site group
* Use a single `.env.example` file for all environments
* Use environment specific config settings to config/general.php, dependent on CRAFT_ENVIRONMENT variable
* Added more config settings to config/general.php
* Added modules/_faux to enable autocompletion for some most frequently used variables in twig
* Added /web/cpresources, /node_modules, /config/license.key to .gitignore
* Added setup/install for automated installation under ddev, creates a user with user defined username/password.
* Prepared optional Tailwind installation
* Added scaffolding example page `setup/examples/page.twig`

## DDEV Installation

* Clone repository
* `cd` into project directory
* Run `bash setup/install <projectname> <username> <password>`

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

