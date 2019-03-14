<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MoPenBindIsv
 *
 * @method string getOrderKey()
 * @method string getDeviceName()
 */
class MoPenBindIsvRequest extends \RpcAcsRequest
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
            'MoPenBindIsv',
            'mopen'
        );
    }

    /**
     * @param string $orderKey
     *
     * @return $this
     */
    public function setOrderKey($orderKey)
    {
        $this->requestParameters['OrderKey'] = $orderKey;
        $this->queryParameters['OrderKey'] = $orderKey;

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
