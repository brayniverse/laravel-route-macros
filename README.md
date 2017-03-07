# Laravel route macros

[![Build Status](https://travis-ci.org/brayniverse/laravel-route-macros.svg)](https://travis-ci.org/brayniverse/laravel-route-macros)
[![Total Downloads](https://poser.pugx.org/brayniverse/laravel-route-macros/d/total.svg)](https://packagist.org/packages/brayniverse/laravel-route-macros)
[![Latest Stable Version](https://poser.pugx.org/brayniverse/laravel-route-macros/v/stable.svg)](https://packagist.org/packages/brayniverse/laravel-route-macros)
[![Latest Unstable Version](https://poser.pugx.org/brayniverse/laravel-route-macros/v/unstable.svg)](https://packagist.org/packages/brayniverse/laravel-route-macros)
[![License](https://poser.pugx.org/brayniverse/laravel-route-macros/license.svg)](https://packagist.org/packages/brayniverse/laravel-route-macros)

## Installation

Begin by installing the package through Composer.

```bash
$ composer require brayniverse/laravel-route-macros
```

Then add the following to your providers array in `config/app.php`.

```php
Brayniverse\LaravelRouteMacros\ServiceProvider::class
```

## Usage

### `view`

Normally you'd have to return a view in either a controller method or callback like the following: 

```php
public function contact()
{
  return view('contact');
}

// or

Route::get('/contact', function () {
  return view('contact');
});
```

Now you can do the same in one line.

```php
Route::view('/contact', 'contact');
```

### `redirect`

Normally you'd have to create a closure to redirect to the new route.

```php
Route::get('/contact_us', function () {
  return redirect('/contact');
});
```

Now you can do the same in one line.

```php
Route::redirect('/contact_us', '/contact');
```

Optionally, you can pass a third argument to `Route::redirect()` which will set the status code when redirecting. If you do not specify a status code, the package will use `301` as the status code.

```php
Route::redirect('/contact_us', '/contact', 302);
```
## Credits

- [Christopher L Bray](https://github.com/brayniverse)
- [All Contributors](../../contributors)
