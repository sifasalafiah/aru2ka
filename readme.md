# Install

To get started with Aru2ka, use Composer to add the package to your project's dependencies:

```
composer require codakarta/aru2ka
```

Publish aru2ka style:

```
php artisan vendor:publish --tag=aru2ka
```

Register the service provider:

```
'providers' => [
    /*
    * Package Service Providers...
    */
    Codakarta\Aru2ka\ArunikaServiceProvider::class,
],
```

Finalizing the installatio:

```
npm install
npm run dev
```
<!-- <br>
<h3 align="center">
    <a href="https://realrashid.github.io/sweet-alert" target="_blank">Documentation</a>
</h3>
<br> -->


## License

Aru2ka is open-sourced software licensed under the MIT License (MIT). Please see [License File](LICENSE.md) for more information.