<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of QueryMarketImages
 *
 * @method string getSupportIoOptimized()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getPageNo()
 * @method string getExtra()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getMarketImageCategory()
 * @method string getOwnerId()
 */
class QueryMarketImagesRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'QueryMarketImages',
            'ecs'
        );
    }

    /**
     * @param string $supportIoOptimized
     *
     * @return $this
     */
    public function setSupportIoOptimized($supportIoOptimized)
    {
        $this->requestParameters['SupportIoOptimized'] = $supportIoOptimized;
        $this->queryParameters['SupportIoOptimized'] = $supportIoOptimized;

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
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $extra
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->requestParameters['Extra'] = $extra;
        $this->queryParameters['Extra'] = $extra;

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
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $marketImageCategory
     *
     * @return $this
     */
    public function setMarketImageCategory($marketImageCategory)
    {
        $this->requestParameters['MarketImageCategory'] = $marketImageCategory;
        $this->queryParameters['MarketImageCategory'] = $marketImageCategory;

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
}
