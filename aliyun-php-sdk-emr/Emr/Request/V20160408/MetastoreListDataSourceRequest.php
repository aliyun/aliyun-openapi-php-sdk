<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreListDataSource
 *
 * @method string getResourceOwnerId()
 * @method string getClusterReleased()
 * @method string getPageSize()
 * @method string getSourceType()
 * @method string getDataSourceName()
 * @method string getPageNumber()
 */
class MetastoreListDataSourceRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'MetastoreListDataSource',
            'emr'
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
     * @param string $clusterReleased
     *
     * @return $this
     */
    public function setClusterReleased($clusterReleased)
    {
        $this->requestParameters['ClusterReleased'] = $clusterReleased;
        $this->queryParameters['ClusterReleased'] = $clusterReleased;

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
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->requestParameters['SourceType'] = $sourceType;
        $this->queryParameters['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @param string $dataSourceName
     *
     * @return $this
     */
    public function setDataSourceName($dataSourceName)
    {
        $this->requestParameters['DataSourceName'] = $dataSourceName;
        $this->queryParameters['DataSourceName'] = $dataSourceName;

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
