<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePhysicalConnection
 *
 * @method string getAccessPointId()
 * @method string getResourceOwnerId()
 * @method string getPortType()
 * @method string getCircuitCode()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getType()
 * @method string getUserCidr()
 * @method string getRedundantPhysicalConnectionId()
 * @method string getPeerLocation()
 * @method string getbandwidth()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getLineOperator()
 * @method string getName()
 */
class CreatePhysicalConnectionRequest extends \RpcAcsRequest
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
            'CreatePhysicalConnection',
            'ecs'
        );
    }

    /**
     * @param string $accessPointId
     *
     * @return $this
     */
    public function setAccessPointId($accessPointId)
    {
        $this->requestParameters['AccessPointId'] = $accessPointId;
        $this->queryParameters['AccessPointId'] = $accessPointId;

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
     * @param string $portType
     *
     * @return $this
     */
    public function setPortType($portType)
    {
        $this->requestParameters['PortType'] = $portType;
        $this->queryParameters['PortType'] = $portType;

        return $this;
    }

    /**
     * @param string $circuitCode
     *
     * @return $this
     */
    public function setCircuitCode($circuitCode)
    {
        $this->requestParameters['CircuitCode'] = $circuitCode;
        $this->queryParameters['CircuitCode'] = $circuitCode;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $userCidr
     *
     * @return $this
     */
    public function setUserCidr($userCidr)
    {
        $this->requestParameters['UserCidr'] = $userCidr;
        $this->queryParameters['UserCidr'] = $userCidr;

        return $this;
    }

    /**
     * @param string $redundantPhysicalConnectionId
     *
     * @return $this
     */
    public function setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
    {
        $this->requestParameters['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;
        $this->queryParameters['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;

        return $this;
    }

    /**
     * @param string $peerLocation
     *
     * @return $this
     */
    public function setPeerLocation($peerLocation)
    {
        $this->requestParameters['PeerLocation'] = $peerLocation;
        $this->queryParameters['PeerLocation'] = $peerLocation;

        return $this;
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setbandwidth($bandwidth)
    {
        $this->requestParameters['bandwidth'] = $bandwidth;
        $this->queryParameters['bandwidth'] = $bandwidth;

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
     * @param string $lineOperator
     *
     * @return $this
     */
    public function setLineOperator($lineOperator)
    {
        $this->requestParameters['LineOperator'] = $lineOperator;
        $this->queryParameters['LineOperator'] = $lineOperator;

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
