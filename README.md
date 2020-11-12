# Laravel PHPStorm Stubs

[![Build Status](https://travis-ci.org/darrenedale/laravel-phpstorm-stubs.svg?branch=main)](https://travis-ci.org/darrenedale/laravel-phpstorm-stubs)

This repository contains a PHPStorm plugin that provides auto-completion for some Laravel interfaces that are not
explicit in the Laravel source (e.g. methods on facades). It is a long way from complete.

To build the plugin simply zip the content of the `plugin` directory:

    zip -r laravel-phpstorm-stubs.jar *

To install the plugin, open **Settings** > **Plugins** > **{gear-icon}** > **Install Plugin from Disk...** and choose
the `.jar` file created by the build.

When the plugin is loaded, the files will be visible (read-only) in the project explorer under **External Libraries** >
**PHP** > **laravel**.
