<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateBandwidthPackage
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getISP()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getZone()
 * @method string getInternetChargeType()
 * @method string getName()
 * @method string getNatGatewayId()
 * @method string getIpCount()
 */
class CreateBandwidthPackageRequest extends \RpcAcsRequest
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
            'CreateBandwidthPackage',
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
     * @param string $iSP
     *
     * @return $this
     */
    public function setISP($iSP)
    {
        $this->requestParameters['ISP'] = $iSP;
        $this->queryParameters['ISP'] = $iSP;

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
     * @param string $zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->requestParameters['Zone'] = $zone;
        $this->queryParameters['Zone'] = $zone;

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

    /**
     * @param string $natGatewayId
     *
     * @return $this
     */
    public function setNatGatewayId($natGatewayId)
    {
        $this->requestParameters['NatGatewayId'] = $natGatewayId;
        $this->queryParameters['NatGatewayId'] = $natGatewayId;

        return $this;
    }

    /**
     * @param string $ipCount
     *
     * @return $this
     */
    public function setIpCount($ipCount)
    {
        $this->requestParameters['IpCount'] = $ipCount;
        $this->queryParameters['IpCount'] = $ipCount;

        return $this;
    }
}
