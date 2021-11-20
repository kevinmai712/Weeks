# Resto Pros

## Prerequisites

Fragment relies on **NPM** and **Composer** in order to load dependencies and packages.
**Webpack** should always be running and watching during the development process, in order to properly compile and update files.

* Install [Composer](https://getcomposer.org/)
* Install [Node](https://nodejs.org/)


## Installation

* Open a Terminal window on the location of the theme folder
* Execute `composer install`
* Execute `npm install`


## Webpack

Fragment uses [Laravel Mix](https://laravel.com/docs/5.6/mix) for assets management. Check the official documentation for advanced options

* Edit the `webpack.mix.js` in the root directory of your theme to set your localhost URL and customize your assets
* `npm run watch` to start browserSync with LiveReload and proxy to your custom URL
* `npm run dev` to quickly compile and bundle all the assets without watching
* `npm run prod` to compile the assets for production

## Plugins needed
* [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)
* [CPT UI](https://wordpress.org/plugins/custom-post-type-ui/)
* [Classic Editor](https://wordpress.org/plugins/classic-editor/)
* [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* [Timber](https://wordpress.org/plugins/timber-library/)

See included zip folder for plugins to install

## Features

* Bult-in `webpack.mix.js` for fast development and compiling.
* `OOP` PHP, and `namespaces` with `PSR4` autoload.
* `Customizer` ready with boilerplate and example classes.
* `Gutenberg` ready with boilerplate and example blocks.
* `ES6 Javascript` syntax ready.
* Compatible with `JetPack`, `WooCommerce`, `ACF PRO`, and all the most famous plugins.
* Built-in `FlexBox` Responsive Grid.
* Modular, Components based file structure.
