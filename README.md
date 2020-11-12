# phpstorm-library-plugin

[![Build Status](https://travis-ci.org/darrenedale/laravel-phpstorm-stubs.svg?branch=main)](https://travis-ci.org/darrenedale/laravel-phpstorm-stubs)

The repository contains a PHPStorm plugin that provides auto-completion for some Laravel interfaces that are not
explicit in the Laravel source (e.g. methods on facades). It is a long way from complete.


To turn these files into a plugin you need to simply zip content of the `plugin` directory:

    zip -r laravel-phpstorm-stubs.jar *

If you install the plugin into PhpStorm you'll find the files attached as an external library.
