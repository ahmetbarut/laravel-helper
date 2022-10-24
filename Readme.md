## @dd_if(bool $condition, ...$args)

## For Laravel
if you use laravel framework, you can use this function to dump the variable if the condition is true.

```php
// config/app.php
'providers' => [
    ...
    AhmetBarut\LaravelHelper\LaravelHelperServiceProvider::class,
];
```


```php
@dd_if(true, $var1, $var2, $var3);
```

if use only php, you can use this function to dump the variable if the condition is true.

```php
dd_if(true, $var1, $var2, $var3);
```
