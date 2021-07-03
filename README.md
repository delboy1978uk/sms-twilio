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
use Bone\Sms\Adapter\Twilio;

$accoundSid = 'XXXXX';
$authToken = 'XXXXX';
$fomNumber = '+3211122233';
$adapter = new Twilio($accountSid, $authToken, $fromNumber);
$service = new SmsService($adapter);
```

