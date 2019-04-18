<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSlowLogRecords
 *
 * @method string getSQLId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getDBName()
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getNodeId()
 */
class DescribeSlowLogRecordsRequest extends \RpcAcsRequest
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
            'R-kvstore',
            '2015-01-01',
            'DescribeSlowLogRecords',
            'redisa'
        );
    }

    /**
     * @param string $sQLId
     *
     * @return $this
     */
    public function setSQLId($sQLId)
    {
        $this->requestParameters['SQLId'] = $sQLId;
        $this->queryParameters['SQLId'] = $sQLId;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

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
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
     * @param string $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->requestParameters['NodeId'] = $nodeId;
        $this->queryParameters['NodeId'] = $nodeId;

        return $this;
    }
}
