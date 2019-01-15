<?php

namespace Iot\Request\V20180120;

/**
 * Request of DeleteDeviceProp
 *
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getPropKey()
 */
class DeleteDevicePropRequest extends \RpcAcsRequest
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
            'DeleteDeviceProp'
        );
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

    /**
     * @param string $propKey
     *
     * @return $this
     */
    public function setPropKey($propKey)
    {
        $this->requestParameters['PropKey'] = $propKey;
        $this->queryParameters['PropKey'] = $propKey;

        return $this;
    }
}
