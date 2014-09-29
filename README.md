## Installation

Add `HaiFangHui/sessionbuffer` to `composer.json`.

  "HaiFangHui/sessionbuffer": "dev-master"

Run `composer update` to pull down the latest version of SessionBuffer.

Now open `app/config/app.php`, and add the service provider to your `providers` array

```php
'providers' => array(
    'HaiFangHui\SessionBuffer\SessionBufferServiceProvider',
)
```

Now add the alias

```php
'aliases' => array(
    'SessionBuffer' => HaiFangHui\SessionBuffer\SessionBufferFacade'
)
```


## Configuration

To tune SessionBuffer, you could config your buffers like this


```
php artisan config:publish haifanghui/sessionbuffer
```

Then you could modify `app/config/packages/haifanghui/sessionbuffer/config.php`. Modify as needed. 


## Usage

```
   SessionBuffer::push('view_history_properties', $property->id);
```
