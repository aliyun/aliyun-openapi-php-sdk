<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeLifecycleHooks
 *
 * @method string getLifecycleHookName()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method array getLifecycleHookIds()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getPageNumber()
 */
class DescribeLifecycleHooksRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'DescribeLifecycleHooks',
            'ess'
        );
    }

    /**
     * @param string $lifecycleHookName
     *
     * @return $this
     */
    public function setLifecycleHookName($lifecycleHookName)
    {
        $this->requestParameters['LifecycleHookName'] = $lifecycleHookName;
        $this->queryParameters['LifecycleHookName'] = $lifecycleHookName;

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
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param array $lifecycleHookId
     *
     * @return $this
     */
    public function setLifecycleHookIds(array $lifecycleHookId)
    {
        $this->requestParameters['LifecycleHookIds'] = $lifecycleHookId;
        foreach ($lifecycleHookId as $i => $iValue) {
            $this->queryParameters['LifecycleHookId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
