<?php

namespace Iot\Request\V20180120;

/**
 * Request of GetDeviceShadow
 *
 * @method string getShadowMessage()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class GetDeviceShadowRequest extends \RpcAcsRequest
{

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
            'Iot',
            '2018-01-20',
            'GetDeviceShadow'
        );
    }

    /**
     * @param string $shadowMessage
     *
     * @return $this
     */
    public function setShadowMessage($shadowMessage)
    {
        $this->requestParameters['ShadowMessage'] = $shadowMessage;
        $this->queryParameters['ShadowMessage'] = $shadowMessage;

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

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }
}
