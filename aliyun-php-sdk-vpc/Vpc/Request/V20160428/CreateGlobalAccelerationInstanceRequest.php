<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateGlobalAccelerationInstance
 *
 * @method string getResourceOwnerId()
 * @method string getBandwidthType()
 * @method string getResourceOwnerAccount()
 * @method string getServiceLocation()
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getInternetChargeType()
 * @method string getName()
 */
class CreateGlobalAccelerationInstanceRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'CreateGlobalAccelerationInstance',
            'vpc'
        );
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
     * @param string $bandwidthType
     *
     * @return $this
     */
    public function setBandwidthType($bandwidthType)
    {
        $this->requestParameters['BandwidthType'] = $bandwidthType;
        $this->queryParameters['BandwidthType'] = $bandwidthType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $serviceLocation
     *
     * @return $this
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->requestParameters['ServiceLocation'] = $serviceLocation;
        $this->queryParameters['ServiceLocation'] = $serviceLocation;

        return $this;
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
