<?php

namespace Iot\Request\V20180120;

/**
 * Request of InvokeThingsService
 *
 * @method string getArgs()
 * @method string getIdentifier()
 * @method array getDeviceNames()
 * @method string getProductKey()
 */
class InvokeThingsServiceRequest extends \RpcAcsRequest
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
            'InvokeThingsService'
        );
    }

    /**
     * @param string $args
     *
     * @return $this
     */
    public function setArgs($args)
    {
        $this->requestParameters['Args'] = $args;
        $this->queryParameters['Args'] = $args;

        return $this;
    }

    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->requestParameters['Identifier'] = $identifier;
        $this->queryParameters['Identifier'] = $identifier;

        return $this;
    }

    /**
     * @param array $deviceNames
     *
     * @return $this
     */
    public function setDeviceNames(array $deviceNames)
    {
        $this->requestParameters['DeviceNames'] = $deviceNames;
        foreach ($deviceNames as $i => $iValue) {
            $this->queryParameters['DeviceName.' . ($i + 1)] = $iValue;
        }

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
