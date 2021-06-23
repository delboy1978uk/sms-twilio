# sms-twilio
A Twilio SMS provider adapter for `delboy1978uk/sms`
## installation
Install via composer
```
composer require delboy1978uk/sms-twilio
```
## usage
Instantiate the adapter and pass it into the `SmsService`constructor.
```php
use Bone\Sms\Adapter\Twilio

$adapter = new Twilio();
$service = new SmsService($adapter);
```

