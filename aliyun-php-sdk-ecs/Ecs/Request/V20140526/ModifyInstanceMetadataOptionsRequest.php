<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyInstanceMetadataOptions
 *
 * @method string getResourceOwnerId()
 * @method string getHttpPutResponseHopLimit()
 * @method string getHttpEndpoint()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getHttpTokens()
 */
class ModifyInstanceMetadataOptionsRequest extends \RpcAcsRequest
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
            'ModifyInstanceMetadataOptions',
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
     * @param string $httpPutResponseHopLimit
     *
     * @return $this
     */
    public function setHttpPutResponseHopLimit($httpPutResponseHopLimit)
    {
        $this->requestParameters['HttpPutResponseHopLimit'] = $httpPutResponseHopLimit;
        $this->queryParameters['HttpPutResponseHopLimit'] = $httpPutResponseHopLimit;

        return $this;
    }

    /**
     * @param string $httpEndpoint
     *
     * @return $this
     */
    public function setHttpEndpoint($httpEndpoint)
    {
        $this->requestParameters['HttpEndpoint'] = $httpEndpoint;
        $this->queryParameters['HttpEndpoint'] = $httpEndpoint;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $httpTokens
     *
     * @return $this
     */
    public function setHttpTokens($httpTokens)
    {
        $this->requestParameters['HttpTokens'] = $httpTokens;
        $this->queryParameters['HttpTokens'] = $httpTokens;

        return $this;
    }
}
