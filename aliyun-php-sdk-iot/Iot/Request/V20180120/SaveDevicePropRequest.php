<?php

namespace Iot\Request\V20180120;

/**
 * Request of SaveDeviceProp
 *
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getProps()
 */
class SaveDevicePropRequest extends \RpcAcsRequest
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
            'SaveDeviceProp'
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
     * @param string $props
     *
     * @return $this
     */
    public function setProps($props)
    {
        $this->requestParameters['Props'] = $props;
        $this->queryParameters['Props'] = $props;

        return $this;
    }
}
