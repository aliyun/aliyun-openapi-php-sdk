<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateForwardEntry
 *
 * @method string getResourceOwnerId()
 * @method string getForwardTableId()
 * @method string getInternalIp()
 * @method string getExternalIp()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInternalPort()
 * @method string getExternalPort()
 */
class CreateForwardEntryRequest extends \RpcAcsRequest
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
            'CreateForwardEntry',
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
     * @param string $forwardTableId
     *
     * @return $this
     */
    public function setForwardTableId($forwardTableId)
    {
        $this->requestParameters['ForwardTableId'] = $forwardTableId;
        $this->queryParameters['ForwardTableId'] = $forwardTableId;

        return $this;
    }

    /**
     * @param string $internalIp
     *
     * @return $this
     */
    public function setInternalIp($internalIp)
    {
        $this->requestParameters['InternalIp'] = $internalIp;
        $this->queryParameters['InternalIp'] = $internalIp;

        return $this;
    }

    /**
     * @param string $externalIp
     *
     * @return $this
     */
    public function setExternalIp($externalIp)
    {
        $this->requestParameters['ExternalIp'] = $externalIp;
        $this->queryParameters['ExternalIp'] = $externalIp;

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        $this->requestParameters['IpProtocol'] = $ipProtocol;
        $this->queryParameters['IpProtocol'] = $ipProtocol;

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
     * @param string $internalPort
     *
     * @return $this
     */
    public function setInternalPort($internalPort)
    {
        $this->requestParameters['InternalPort'] = $internalPort;
        $this->queryParameters['InternalPort'] = $internalPort;

        return $this;
    }

    /**
     * @param string $externalPort
     *
     * @return $this
     */
    public function setExternalPort($externalPort)
    {
        $this->requestParameters['ExternalPort'] = $externalPort;
        $this->queryParameters['ExternalPort'] = $externalPort;

        return $this;
    }
}
