<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeTemplatesList
 *
 * @method string getResourceOwnerId()
 * @method string getStartTime()
 * @method string getSortKey()
 * @method string getMinAvgScanRows()
 * @method string getSecurityToken()
 * @method string getPageNumbers()
 * @method string getPagingId()
 * @method string getDBInstanceId()
 * @method string getMaxAvgScanRows()
 * @method string getResourceOwnerAccount()
 * @method string getMinAvgConsume()
 * @method string getOwnerAccount()
 * @method string getMaxRecordsPerPage()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getMaxAvgConsume()
 * @method string getSqType()
 * @method string getSortMethod()
 */
class DescribeTemplatesListRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'DescribeTemplatesList',
            'rds'
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
     * @param string $sortKey
     *
     * @return $this
     */
    public function setSortKey($sortKey)
    {
        $this->requestParameters['SortKey'] = $sortKey;
        $this->queryParameters['SortKey'] = $sortKey;

        return $this;
    }

    /**
     * @param string $minAvgScanRows
     *
     * @return $this
     */
    public function setMinAvgScanRows($minAvgScanRows)
    {
        $this->requestParameters['MinAvgScanRows'] = $minAvgScanRows;
        $this->queryParameters['MinAvgScanRows'] = $minAvgScanRows;

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
     * @param string $pageNumbers
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->requestParameters['PageNumbers'] = $pageNumbers;
        $this->queryParameters['PageNumbers'] = $pageNumbers;

        return $this;
    }

    /**
     * @param string $pagingId
     *
     * @return $this
     */
    public function setPagingId($pagingId)
    {
        $this->requestParameters['PagingId'] = $pagingId;
        $this->queryParameters['PagingId'] = $pagingId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $maxAvgScanRows
     *
     * @return $this
     */
    public function setMaxAvgScanRows($maxAvgScanRows)
    {
        $this->requestParameters['MaxAvgScanRows'] = $maxAvgScanRows;
        $this->queryParameters['MaxAvgScanRows'] = $maxAvgScanRows;

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
     * @param string $minAvgConsume
     *
     * @return $this
     */
    public function setMinAvgConsume($minAvgConsume)
    {
        $this->requestParameters['MinAvgConsume'] = $minAvgConsume;
        $this->queryParameters['MinAvgConsume'] = $minAvgConsume;

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
     * @param string $maxRecordsPerPage
     *
     * @return $this
     */
    public function setMaxRecordsPerPage($maxRecordsPerPage)
    {
        $this->requestParameters['MaxRecordsPerPage'] = $maxRecordsPerPage;
        $this->queryParameters['MaxRecordsPerPage'] = $maxRecordsPerPage;

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
     * @param string $maxAvgConsume
     *
     * @return $this
     */
    public function setMaxAvgConsume($maxAvgConsume)
    {
        $this->requestParameters['MaxAvgConsume'] = $maxAvgConsume;
        $this->queryParameters['MaxAvgConsume'] = $maxAvgConsume;

        return $this;
    }

    /**
     * @param string $sqType
     *
     * @return $this
     */
    public function setSqType($sqType)
    {
        $this->requestParameters['SqType'] = $sqType;
        $this->queryParameters['SqType'] = $sqType;

        return $this;
    }

    /**
     * @param string $sortMethod
     *
     * @return $this
     */
    public function setSortMethod($sortMethod)
    {
        $this->requestParameters['SortMethod'] = $sortMethod;
        $this->queryParameters['SortMethod'] = $sortMethod;

        return $this;
    }
}
