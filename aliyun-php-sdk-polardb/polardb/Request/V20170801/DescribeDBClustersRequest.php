<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDBClusters
 *
 * @method string getResourceOwnerId()
 * @method string getDBClusterDescription()
 * @method string getDBClusterStatus()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBType()
 * @method string getDBClusterIds()
 */
class DescribeDBClustersRequest extends \RpcAcsRequest
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
            'polardb',
            '2017-08-01',
            'DescribeDBClusters',
            'polardb'
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
     * @param string $dBClusterDescription
     *
     * @return $this
     */
    public function setDBClusterDescription($dBClusterDescription)
    {
        $this->requestParameters['DBClusterDescription'] = $dBClusterDescription;
        $this->queryParameters['DBClusterDescription'] = $dBClusterDescription;

        return $this;
    }

    /**
     * @param string $dBClusterStatus
     *
     * @return $this
     */
    public function setDBClusterStatus($dBClusterStatus)
    {
        $this->requestParameters['DBClusterStatus'] = $dBClusterStatus;
        $this->queryParameters['DBClusterStatus'] = $dBClusterStatus;

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
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

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
     * @param string $dBType
     *
     * @return $this
     */
    public function setDBType($dBType)
    {
        $this->requestParameters['DBType'] = $dBType;
        $this->queryParameters['DBType'] = $dBType;

        return $this;
    }

    /**
     * @param string $dBClusterIds
     *
     * @return $this
     */
    public function setDBClusterIds($dBClusterIds)
    {
        $this->requestParameters['DBClusterIds'] = $dBClusterIds;
        $this->queryParameters['DBClusterIds'] = $dBClusterIds;

        return $this;
    }
}
