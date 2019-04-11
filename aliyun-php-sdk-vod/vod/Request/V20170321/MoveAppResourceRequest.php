<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MoveAppResource
 *
 * @method string getTargetAppId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getResourceIds()
 */
class MoveAppResourceRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'MoveAppResource',
            'vod'
        );
    }

    /**
     * @param string $targetAppId
     *
     * @return $this
     */
    public function setTargetAppId($targetAppId)
    {
        $this->requestParameters['TargetAppId'] = $targetAppId;
        $this->queryParameters['TargetAppId'] = $targetAppId;

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
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function setResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->requestParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->queryParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $resourceIds
     *
     * @return $this
     */
    public function setResourceIds($resourceIds)
    {
        $this->requestParameters['ResourceIds'] = $resourceIds;
        $this->queryParameters['ResourceIds'] = $resourceIds;

        return $this;
    }
}
