<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MoPenSendMqttMessage
 *
 * @method string getPayload()
 * @method string getDeviceName()
 */
class MoPenSendMqttMessageRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'MoPen',
            '2018-02-11',
            'MoPenSendMqttMessage',
            'mopen'
        );
    }

    /**
     * @param string $payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->requestParameters['Payload'] = $payload;
        $this->queryParameters['Payload'] = $payload;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->requestParameters['DeviceName'] = $deviceName;
        $this->queryParameters['DeviceName'] = $deviceName;

        return $this;
    }
}
