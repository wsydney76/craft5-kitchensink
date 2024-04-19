# Craft 5 Bare Bones Starter

This is a pure Craft CMS starter as provided in the craftcms/craft package with 
the following additions:


* Set system timezone to Europe/Berlin
* Use neutral names/@web alias for default site/site group
* Added more config settings to config/general.php
* Added modules/_faux to enable autocompletion for some most frequently used variables in twig
* Added /web/cpresources, /node_modules, /config/license.key to .gitignore
* Added setup/install for automated installation under ddev, creates a user with user defined username/password.
* Prepared optional Tailwind installation

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

## Install Tailwind CSS (optional)

* `cd` into project directory
* Run `bash setup/install-tailwind`

