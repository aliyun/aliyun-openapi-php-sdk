<?php

namespace hsm\Request\V20180111;

/**
 * Request of CreateInstance
 *
 * @method string getPeriod()
 * @method string getPeriodUnit()
 * @method string getResourceOwnerId()
 * @method string getQuantity()
 * @method string getHsmDeviceType()
 * @method string getClientToken()
 * @method string getZoneId()
 * @method string getHsmOem()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'hsm',
            '2018-01-11',
            'CreateInstance',
            'hsm'
        );
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        $this->requestParameters['PeriodUnit'] = $periodUnit;
        $this->queryParameters['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->requestParameters['Quantity'] = $quantity;
        $this->queryParameters['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $hsmDeviceType
     *
     * @return $this
     */
    public function setHsmDeviceType($hsmDeviceType)
    {
        $this->requestParameters['HsmDeviceType'] = $hsmDeviceType;
        $this->queryParameters['HsmDeviceType'] = $hsmDeviceType;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $hsmOem
     *
     * @return $this
     */
    public function setHsmOem($hsmOem)
    {
        $this->requestParameters['HsmOem'] = $hsmOem;
        $this->queryParameters['HsmOem'] = $hsmOem;

        return $this;
    }
}
