<?php

namespace Bone\Sms\Provider;

use Bone\Sms\SmsProviderInterface;
use Twilio\Rest\Client;

class Twilio implements SmsProviderInterface
{
    private Client $client;
    private string $fromNumber;

    /**
     * Twilio constructor.
     * @param array $settings
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function __construct(string $accountSid, string $authToken, string $fromNumber)
    {
        $this->client = new Client($accountSid, $authToken);
        $this->fromNumber = $fromNumber;
    }

    /**
     * @param string $to
     * @param string $sms
     * @return bool
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function sendSms(string $to, string $sms): bool
    {
        $this->client->messages->create($to, [
            'from' => $this->fromNumber,
            'body' => $sms
        ]);

        return true;
    }
}
