<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRouteTables
 *
 * @method string getResourceOwnerId()
 * @method string getVRouterId()
 * @method string getPageNumber()
 * @method string getRouteTableName()
 * @method string getPageSize()
 * @method string getRouteTableId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getRouterType()
 * @method string getRouterId()
 */
class DescribeRouteTablesRequest extends \RpcAcsRequest
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
            'DescribeRouteTables',
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
     * @param string $vRouterId
     *
     * @return $this
     */
    public function setVRouterId($vRouterId)
    {
        $this->requestParameters['VRouterId'] = $vRouterId;
        $this->queryParameters['VRouterId'] = $vRouterId;

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

    /**
     * @param string $routeTableName
     *
     * @return $this
     */
    public function setRouteTableName($routeTableName)
    {
        $this->requestParameters['RouteTableName'] = $routeTableName;
        $this->queryParameters['RouteTableName'] = $routeTableName;

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
     * @param string $routeTableId
     *
     * @return $this
     */
    public function setRouteTableId($routeTableId)
    {
        $this->requestParameters['RouteTableId'] = $routeTableId;
        $this->queryParameters['RouteTableId'] = $routeTableId;

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
     * @param string $routerType
     *
     * @return $this
     */
    public function setRouterType($routerType)
    {
        $this->requestParameters['RouterType'] = $routerType;
        $this->queryParameters['RouterType'] = $routerType;

        return $this;
    }

    /**
     * @param string $routerId
     *
     * @return $this
     */
    public function setRouterId($routerId)
    {
        $this->requestParameters['RouterId'] = $routerId;
        $this->queryParameters['RouterId'] = $routerId;

        return $this;
    }
}
