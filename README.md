[![Latest Stable Version](http://poser.pugx.org/ladumor/laravel-pwa/v)](https://packagist.org/packages/ladumor/laravel-pwa)
[![Daily Downloads](http://poser.pugx.org/ladumor/laravel-pwa/d/daily)](https://packagist.org/packages/ladumor/laravel-pwa)
[![Monthly Downloads](http://poser.pugx.org/ladumor/laravel-pwa/d/monthly)](https://packagist.org/packages/ladumor/laravel-pwa)
[![Total Downloads](http://poser.pugx.org/ladumor/laravel-pwa/downloads)](https://packagist.org/packages/ladumor/laravel-pwa)
[![License](http://poser.pugx.org/ladumor/laravel-pwa/license)](https://packagist.org/packages/ladumor/laravel-pwa)
[![PHP Version Require](http://poser.pugx.org/ladumor/laravel-pwa/require/php)](https://packagist.org/packages/ladumor/laravel-pwa)

# Laravel PWA

## Installation

Install the package by the following command,

    composer require ayarigab/pla

## Add Provider

Add the provider to your `config/app.php` into `provider` section if using lower version of laravel,

    Ayarigab\Pla\PLAServiceProvider::class,

## Add Facade

Add the Facade to your `config/app.php` into `aliases` section,

    'PLA' => \Ayarigab\Pla\PLA::class,

## Publish the Assets

Run the following command to publish config file,

    php artisan pla:publish

## Configure PLA
 Add following code in root blade file in header section.

    <!-- PLA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

Add the following code in your root blade file before closing the body tag.

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

### License
PLA is (MIT) Licensed. Please read the [License](LICENSE.md) file to know more.   
