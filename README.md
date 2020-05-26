# Laravel Countries

## Installation

```shell
composer require barryvdh/laravel-debugbar --dev
```
Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
PranPegu\LaravelCountries\CountriesServiceProvider::class,
```

## Uses

You can now easily get the list of Countries with dial_code and prefix

```php
use Pranpegu\LaravelCountries\Countries;

$countries  = Countries::all(); //returns the array of countries name, dial_code and prefix 

foreach($countries as $country){
    echo $country['name'].",".$country['dial_code'].",".$country['code'].",";
         //eg : Idia,91,IN
}

//or in blade file

<select class="form-group" name="country" >
@foreach($countries as $country)
    <option value="{{$country['name']}}" >{{$country['name']}}</option>
@endforeach
</select>

//can also use for getting phone(dial code) code 

<select class="form-group" name="dial_code" >
@foreach($countries as $country)
    <option value="{{$country['dial_code']}}" >{{$country['dial_code']}}</option>
@endforeach
</select>

//similarly as Country prefix 

<select class="form-group" name="code" >
@foreach($countries as $country)
    <option value="{{$country['code']}}" >{{$country['code']}}</option>
@endforeach
</select>

```

## License

Copyright © Ffegu

Laravel Countries is open-sourced software licensed under the [MIT license](LICENSE.md).


# Donate :)

### paypal : ffegu0617@gmail.com

# Contact :)
### gmail : ffegu0617@gmail.com
### phone : +916361563439

## Hire me : I am always love to work for you