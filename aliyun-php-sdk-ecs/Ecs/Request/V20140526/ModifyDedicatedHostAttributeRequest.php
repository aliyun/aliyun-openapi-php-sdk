<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ModifyDedicatedHostAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getActionOnMaintenance()
 * @method string getDedicatedHostName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDedicatedHostId()
 * @method string getOwnerId()
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getNetworkAttributesUdpTimeout()
 */
class ModifyDedicatedHostAttributeRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyDedicatedHostAttribute',
            'ecs'
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
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function setActionOnMaintenance($actionOnMaintenance)
    {
        $this->requestParameters['ActionOnMaintenance'] = $actionOnMaintenance;
        $this->queryParameters['ActionOnMaintenance'] = $actionOnMaintenance;

        return $this;
    }

    /**
     * @param string $dedicatedHostName
     *
     * @return $this
     */
    public function setDedicatedHostName($dedicatedHostName)
    {
        $this->requestParameters['DedicatedHostName'] = $dedicatedHostName;
        $this->queryParameters['DedicatedHostName'] = $dedicatedHostName;

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
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->requestParameters['DedicatedHostId'] = $dedicatedHostId;
        $this->queryParameters['DedicatedHostId'] = $dedicatedHostId;

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
     * @param string $networkAttributesSlbUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout)
    {
        $this->requestParameters['NetworkAttributesSlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;
        $this->queryParameters['NetworkAttributes.SlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;

        return $this;
    }

    /**
     * @param string $networkAttributesUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout)
    {
        $this->requestParameters['NetworkAttributesUdpTimeout'] = $networkAttributesUdpTimeout;
        $this->queryParameters['NetworkAttributes.UdpTimeout'] = $networkAttributesUdpTimeout;

        return $this;
    }
}
